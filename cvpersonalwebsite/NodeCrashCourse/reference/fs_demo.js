const fs = require('fs');
const path = require('path');

// Create a folder inside the same directory
// fs.mkdir(path.join(__dirname, 'test'), (err) => {
//     if (err) throw err;
//     console.log('Folder created...');
// });

//create and write to file
// fs.writeFile(path.join(__dirname, 'test', 'hello.txt'), 'Hellow  World! ', (err) => {
//     if (err) throw err;
//     console.log('File created and written to...');

//     //file append
//     fs.appendFile(path.join(__dirname, 'test', 'hello.txt'), 'Hi Again!, I Love NODE JS', (err) => {
//         if (err) throw err;
//         console.log('File created and written to...');
//     });
// });

//Read File
// fs.readFile(path.join(__dirname, 'test', 'hello.txt'), 'utf8', (err, data) => {
//     if (err) throw err;
//     console.log(data);
// });

//Rename File
// fs.rename(path.join(__dirname, 'test', 'hello.txt'), path.join(__dirname, 'test', 'helloWorld.txt'), (err) => {
//     if (err) throw err;
//     console.log('File renamed');
// });