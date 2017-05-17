// ----------------------------------------------
// svgstore
//
module.exports = function(grunt, config) {
  return {
    min: {
      files: {
        'libs/css/app.min.css': [ config.cwd+config.package.dirs.css+'*.css', '!'+config.cwd+config.package.dirs.css+'*.min.css']
      }
    }
  };
};
