import gulp from "gulp";

// Конфигурации и пути
import path from "../config/path.js";
import app from "../config/app.js";

// Плагины
import plumber from "gulp-plumber";
import notify from "gulp-notify";
import gulpIf from "gulp-if";

import rename from "gulp-rename";
import babel from "gulp-babel";
import webpack from "webpack-stream";

//Задача
export default () => {
    return gulp.src(path.js.src, {sourcemaps: app.isDev})
    .pipe(plumber({
        errorHandler: notify.onError(error => ({
            title: "JS",
            message: error.message,
        }))
    }))
    .pipe(gulpIf(app.isProd, babel()))
    .pipe(webpack(app.webpack))
    .pipe(rename(app.renameJS))
    .pipe(gulp.dest(path.js.dest, {sourcemaps: app.isDev}))
};