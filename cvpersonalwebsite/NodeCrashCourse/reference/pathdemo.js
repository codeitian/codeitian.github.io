const path = require('path');

//Base file name
console.log(path.basename(__filename));

//Directory name
console.log(path.dirname(__filename));

//file extension
console.log(path.extname(__filename));

//create path object
console.log(path.parse(__filename)); //an object
console.log(path.parse(__filename).base);

//concatenate paths
// ../test/hello.html
console.log(path.join(__dirname, 'test', 'hello.html'));