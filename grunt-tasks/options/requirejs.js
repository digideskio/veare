// ----------------------------------------------
// requirejs
//
module.exports = function(grunt, config) {
    return {
		js: {
			options: {
				baseUrl: config.cwd+config.package.dirs.js+config.package.dirs.bower,
        paths: config.package["require-paths"],
				out: config.cwd+config.package.dirs.js+config.package.variables["require-js-out"],
				name: config.package.variables["require-js-main"],
				optimize: 'uglify',
				// mainConfigFile: config.cwd+config.package.dirs.js+config.package.files["require-opt-config"],
				useStrict: true,
				wrap: true,
        findNestedDependencies: true,
        skipModuleInsertion: true,
        onModuleBundleComplete: function (data) {
          var fs = require('fs'),
          amdclean = require('amdclean'),
          outputFile = data.path;

          fs.writeFileSync(outputFile, amdclean.clean({
            'filePath': outputFile
          }));
        }
			}
		},
		css: {
			options: {
				optimizeCss: 'standard',
				cssIn: config.cwd+config.package.dirs.css+config.package.variables["require-css-main"],
				out: config.cwd+config.package.dirs.css+config.package.variables["require-css-out"]
			}
		}
  };
};
