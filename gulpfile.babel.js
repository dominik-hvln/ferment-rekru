import fs from 'fs';
import del from 'del';
import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import imagemin from 'gulp-imagemin';
import webp from 'gulp-webp';
import webpack from 'webpack-stream';
import zip from 'gulp-zip';
import info from './package.json';
import named from 'vinyl-named';
import browserSync from 'browser-sync';
import replace from 'gulp-replace';
import template from 'gulp-template';
import bump from 'gulp-bump';
import Fiber from 'fibers';

require('dotenv').config()

const env = process.env.NODE_ENV;
const proxy = process.env.PROXY_SERVER || 'localhost:8888';
const author = yargs.argv.author;
const PRODUCTION = yargs.argv.prod;
const PATCH = yargs.argv.patch;
const MINOR = yargs.argv.minor;
const MAJOR = yargs.argv.major;

sass.compiler = require('sass');

export const styles = () => {
    return src('src/scss/index.scss')
        .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
        .pipe(sass({outputStyle: 'expanded', fiber: Fiber}).on('error', sass.logError))
        .pipe(postcss([ autoprefixer() ]))
        .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
        .pipe(gulpif(!PRODUCTION, sourcemaps.write('./')))
        .pipe(dest('dist/css'))
        .pipe(server.stream());
}

export const images = () => {
    return src('src/img/**/*.{jpg,jpeg,png,svg,gif}')
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(webp())
    .pipe(dest('dist/img'));
}

export const copy = () => {
    return src(['src/**/*','!src/{img,js,scss}','!src/{img,js,scss}/**/*'])
        .pipe(dest('dist'));
}

export const scripts = () => {
    return src(['src/js/index.js', 'src/js/vendor/*'])
      .pipe(named())
      .pipe(webpack({
        module: {
          rules: [
            {
              test: /\.js$/,
              use: {
                loader: 'babel-loader',
                options: {
                  presets: []
              }
            }
          }
        ]
      },
      mode: PRODUCTION ? 'production' : 'development',
      devtool: !PRODUCTION ? 'source-map' : false,
      output: {
        filename: '[name].js'
      }
    }))
    .pipe(dest('dist/js'));
}

export const clean = () => del(['dist']);

export const init = () => {
    const { argv } = yargs;
    const themeAuthor = argv.author === 'nuorder' ? 'NuOrder' : 'dkowalski.pl';
    if (author === 'nuorder') {
        del('./screenshot-dkowalski.png');
        fs.rename('./screenshot-nuorder.png','./screenshot.png', function(err) {
            if ( err ) console.log('ERROR: ' + err);
        });
    } else {
        del('./screenshot-nuorder.png');
        fs.rename('./screenshot-dkowalski.png','./screenshot.png', function(err) {
            if ( err ) console.log('ERROR: ' + err);
        });
    }
    return src(['./.env', './style.css', './footer.php', './package.json'])
    .pipe( replace( /"author": ""/, match => {
      return '"author": "' + themeAuthor + '"'
    }) )
    .pipe(
        template({
            themeName: argv.themeName,
            themeDescription: argv.themeDescription,
            themeAuthor: themeAuthor,
            authorUri: argv.author === 'nuorder' ? 'https://nuorder.pl' : 'https://dkowalski.pl',
            authorLogo: argv.author === 'nuorder' ? 'nuorder.svg' : 'dkowalski.svg',
            development: 'development',
        })
    )
    .pipe(dest('./'));
}

export const component = done => {
  const { argv } = yargs;
  const pattern = new RegExp(' ', 'g');
  const name = argv.name.toLowerCase();
  const file = name.replace(pattern, '-');
  const upCaseName = file
    .split('-')
    .map(item => {
        return item.charAt(0).toUpperCase() + item.slice(1);
    })
    .join('');
  const desc = argv.desc;
  const hasjs = argv.js === 'y';
  const hascss = argv.css === 'y';
  const contributor = argv.contributor;

  fs.stat(`parts/components/${file}`, (err, exists) => {
    if(!exists) {
      if (hasjs) {
        src(['generator/component/js/index.js'])
          .pipe(
              template({
                  name: upCaseName,
              })
          )
          .pipe(dest(`parts/components/${file}/js`));
      }
      if (hascss) {
        src(['generator/component/scss/*.**'])
        .pipe(
            template({
                name: file,
            })
        )
        .pipe(dest(`parts/components/${file}/scss`));
      }
      src(['generator/component/*.**'])
                .pipe(
                    template({
                        name: file,
                        hasJs: hasjs,
                        hasCss: hascss,
                        description: desc,
                        themeName: info.name,
                        themeVersion: info.version,
                        themeAuthor: info.author,
                        contributor
                    })
                )
                .pipe(dest(`parts/components/${file}`));
      console.log('\x1b[92m%s\x1b[0m', 'SUCCESS: Component created.');
    } else {
      console.log('\x1b[31m%s\x1b[0m', 'ERROR: Component already exists. Choose a different name.');
    }
  });

  done();
}

export const block = done => {
  const { argv } = yargs;
  const pattern = new RegExp(' ', 'g');
  const name = argv.name.toLowerCase();
  const file = name.replace(pattern, '-');
  console.log(file);
  const upCaseName = file
    .split('-')
    .map(item => {
        return item.charAt(0).toUpperCase() + item.slice(1);
    })
    .join('');
  const underScoreName = file
    .split('-')
    .join('_');
  const desc = argv.desc;
  const hascss = argv.css === 'y';
  const hasjs = argv.js === 'y';
  const jsmodule = argv.jsmodule === 'y';
  const contributor = argv.contributor;

  fs.stat(`parts/blocks/${file}`, (err, exists) => {
    if(!exists) {
      if (hasjs) {
        src(['generator/block/js/index.js'])
          .pipe(
              template({
                  name: upCaseName,
              })
          )
          .pipe(dest(`parts/blocks/${file}/js`));
      }
      if (hascss) {
        src(['generator/block/scss/*.**'])
        .pipe(
            template({
                name: file,
            })
        )
        .pipe(dest(`parts/blocks/${file}/scss`));
      }
      src(['generator/block/**.**'])
                .pipe(
                    template({
                        name: file,
                        slug: underScoreName,
                        title: argv.name,
                        category: argv.category,
                        icon: argv.icon,
                        hasJs: hasjs,
                        jsmodule: jsmodule,
                        hasCss: hascss,
                        description: desc,
                        themeName: info.name,
                        themeVersion: info.version,
                        themeAuthor: info.author,
                        contributor
                    })
                )
                .pipe(dest(`parts/blocks/${file}`));
      console.log('\x1b[92m%s\x1b[0m', 'SUCCESS: Block created.');
    } else {
      console.log('\x1b[31m%s\x1b[0m', 'ERROR: Block already exists. Choose a different name.');
    }
  });

  done();
}

const server = browserSync.create();
export const serve = done => {
  server.init({
    proxy: proxy
  });
  done();
};

export const reload = done => {
  server.reload();
  done();
};

export const bumpVersion = () => {
  return src(['package.json', 'package-lock.json'])
  .pipe(gulpif(PATCH, bump({type:'patch'})))
  .pipe(gulpif(MINOR, bump({type:'minor'})))
  .pipe(gulpif(MAJOR, bump({type:'major'})))
  .pipe(dest('./'));
}

export const updateVersion = () => {
  return src(['style.css'])
  .pipe( replace( /Version: (\d+\.)(\d+\.)(\d+)/, function(match) {
    console.log('Old ' + match + '\nNew Version ' + info.version);
    return 'Version: ' + info.version
  }) )
  .pipe(dest('./'));
}

export const compress = () => {
return src([
    "**/*",
    "!node_modules{,/**}",
    "!bundled{,/**}",
    "!src{,/**}", 
    "!.babelrc",
    "!.gitignore",
    "!gulpfile.babel.js",
    "!package.json",
    "!package-lock.json",
  ])
  .pipe(replace("_themename", info.name))
  //.pipe(zip(`${info.name}.zip`))
  .pipe(dest('./bundled'));
};
  
export const watchForChanges = () => {
    watch(['**/*.scss', '!generator/**/*.scss'], styles);
    watch('src/img/**/*.{jpg,jpeg,png,svg,gif}', series(images, reload));
    watch(['src/**/*','!src/{img,js,scss}','!src/{img,js,scss}/**/*'], series(copy, reload));
    watch(['src/js/**/*.js', 'parts/**/*.js'], series(scripts, reload));
    watch("**/*.php", reload);
}
    
export const dev = gulpif(env == 'development', series(clean, parallel(styles, images, copy, scripts), serve, watchForChanges));
export const update = series(bumpVersion);
export const build = series(clean, updateVersion, parallel(styles, images, copy, scripts), compress);
export default dev;