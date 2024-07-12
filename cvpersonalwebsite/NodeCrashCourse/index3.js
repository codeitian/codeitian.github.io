import http from 'http';
import fs from 'fs/promises';
import url from 'url';
import path from 'path';
const PORT = 8080;

//get current path
const __filename = url.fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

console.log(__dirname, __filename);
//Routing
const server = http.createServer(async (req,res) => {
    // res.setHeader('Content-Type', contentType);
    // res.statusCode = 404

    // res.write('<h1>Hello World!</h1>');

    try {
        if(req.method === 'GET'){
            let filePath;

            if(req.url === '/'){
                filePath = path.join(__dirname, 'public3', 'index.html')
                // res.writeHead(200, {'Content-Type': 'text/html'});
                // res.end('<h1>Home Page</h1>');
                
            }else if(req.url === '/about'){
                filePath = path.join(__dirname, 'public3', 'about.html')
                // res.writeHead(200, {'Content-Type': 'text/html'});
                // res.end('<h1>About Page</h1>');
            }else{
                throw new Error('Not Found');
                // res.writeHead(404, {'Content-Type': 'text/html'});
                // res.end('<h1>404 Page Not found</h1>');
            }

            const data = await fs.readFile(filePath, 'utf8');
            res.setHeader('Content-Type', 'text/html');
            res.write(data);
            res.end();
        }else{
            throw new Error('Method not allowed')
        }
    } catch (error) {
        res.writeHead(500, {'Content-Type': 'text/html'});
        res.end(`<h1>Server Error | ${req.method}</h1> `);
    }

   

    // res.writeHead(500, {'Content-Type': 'application/json'});
    // res.end(JSON.stringify({message: 'Server Error'}));

})



server.listen(PORT, () =>{
    console.log(`Server is running on PORT: ${PORT}`);
})