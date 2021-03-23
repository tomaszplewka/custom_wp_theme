import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import browserSync from "browser-sync";
// import wpPot from "gulp-wp-pot";
import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
const PRODUCTION = yargs.argv.prod;

export const styles = () => {
  return src('src/scss/bundle.scss')
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(dest('dist/css'));
}
export const watchForChanges = () => {
  watch('src/scss/**/*.scss', series(styles, reload));
  watch('src/images/**/*.{jpg,jpeg,png,svg,gif}', series(images, reload));
  watch(['src/**/*','!src/{images,js,scss}','!src/{images,js,scss}/**/*'], series(copy, reload));
  watch('src/js/**/*.js', series(scripts, reload));
  watch("**/*.php", reload);
}
export const images = () => {
  return src('src/images/**/*.{jpg,jpeg,png,svg,gif}')
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(dest('dist/images'));
}
export const copy = () => {
  return src(['src/**/*','!src/{images,js,scss}','!src/{images,js,scss}/**/*'])
    .pipe(dest('dist'));
}
export const clean = () => del(['dist']);
export const scripts = () => {
  return src('src/js/bundle.js')
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
    devtool: !PRODUCTION ? 'inline-source-map' : false,
    output: {
      filename: 'bundle.js'
    },
  }))
  .pipe(dest('dist/js'));
}
const server = browserSync.create();
export const serve = done => {
  server.init({
    proxy: "http://localhost/testsite"
  });
  done();
};
export const reload = done => {
  server.reload();
  done();
};
// export const pot = () => {
//   return src("**/*.php")
//   .pipe(
//       wpPot({
//         domain: 'awesometheme',
//         package: info.name
//       })
//     )
//   .pipe(dest(`languages/${info.name}.pot`));
// };
export const dev = series(clean, parallel(styles, images, copy, scripts), serve, watchForChanges);
// export const build = series(clean, parallel(styles, images, copy, scripts), pot);
export const build = series(clean, parallel(styles, images, copy, scripts));
export default dev;