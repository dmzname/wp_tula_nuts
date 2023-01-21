const pathDest = './dist';

export default {
  root: './dist',
  scss: {
    src: './scss/*.scss',
    watch: './scss/**/*.scss',
    dest: './scss',
  },
  css: {
    src: './scss/*.css',
    watch: './scss/**/*.css',
    dest: pathDest + '/css',
  },
  js: {
    src: './js/*.js',
    watch: './js/**/*.js',
    dest: pathDest + '/js',
  },
};
