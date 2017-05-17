// ----------------------------------------------
// shell commands
//
module.exports = function(grunt, config) {
  return {
    build: {
      // type : 'shell',
      // cmd  : 'build.sh'
      cmd: [
        'source grunt-tasks/custom-options/build.sh',
      ]
    }
  };
};
