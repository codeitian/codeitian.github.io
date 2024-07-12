// const Person = require('./person');

// const person1 = new Person('Jhon Doe', 31);
// const person2 = new Person('Jhoannna', 27);
// const person3 = new Person('Batman', 48);

// person2.greeting();

// console.log(person1, person2, person3)

//////////////////////////////Logger

// const Logger =  require('./logger')

// const logger = new Logger();


// logger.on('message', (data) => console.log('Called Listener',data))

// logger.log('hello world!');
// logger.log('hui world!');
// logger.log('hala world!');

////////////////////////////
const http = require('http');
const path = require('path');
const fs = require('fs');

const server = http.createServer((req, res) => {
    //console.log(req.url)
    // if(req.url === '/'){
    //     fs.readFile(path.join(__dirname,'public', 'index.html'), (err, content) =>{
    //         if(err) throw err;
    //         res.writeHead(200, {'Content-Type': 'text/html'});
    //         res.end(content) //content can be replaced with html
    //     });
    // }

    // if(req.url === '/about'){
    //     fs.readFile(path.join(__dirname,'public', 'about.html'), (err, content) =>{
    //         if(err) throw err;
    //         res.writeHead(200, {'Content-Type': 'text/html'});
    //         res.end(content) //content can be replaced with html
    //     });
    // }

    // if(req.url === '/api/users'){
    //     const users = [
    //         {name: 'Hui', age: 40},
    //         {name: 'Hala', age: 34}
    //     ];

    //     res.writeHead(200, {'Content-Type': 'application/json'});
    //     res.end(JSON.stringify(users)) //content can be replaced with html

    // }

    //build file path
    let filePath = path.join(__dirname, 'public', req.url === '/' ? 'index.html' : req.url);

    // console.log(filePath);
    // res.end();

    //file extension
    let extname = path.extname(filePath);
    let contentType = 'text/html';

    //check ext and set content type
    switch(extname){
        case '.js':
            contentType = 'text/javascript';
            break;
        case '.css':
            contentType = 'text/css';
            break;
        case '.json':
            contentType = 'application/json';
            break;
        case '.png':
            contentType = 'image/png';
            break;
    }

    //read file
    fs.readFile(filePath, (err, content) =>{
        if(err) {
            if(err.code == 'ENOENT'){
                //Page not found
                fs.readFile(path.join(__dirname, 'public', '404.html'), (err, content) =>{
                    res.writeHead(200, {'Content-Type': 'text/html'});
                    res.end(content, 'utf8');
                });
            }else{
                //some server error
                res.writeHead(500);
                res.end(`Server error: ${err.code}`);
            }
        }else{
            //Success
            res.writeHead(200, {'Content-Type': contentType});
            res.end(content, 'utf8');
        }
    });
})

const PORT = process.env.PORT || 5000;

server.listen(PORT, () => console.log(`Server is running on port:  ${PORT}`)); 