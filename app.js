const http = require('http');
const mysql = require('mysql');
const server = http.createServer();

//Creacion del servidor
server.on('request', (req, res) => {
    res.writeHead(200, {'Content-Type':'text/plain'});
    res.end('hola mundo')
})

server.listen(3000);
console.log('Servidor en la url http://localhost:3000'); 

//Conexion a mysql
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'root',
    database: 'landigpagenode'
});

connection.connect((err) => {
    if (err) throw err;
    console.log('connected!');
    const sql = "INSERT INTO clients(client_id, email) VALUES (0, 'email@prueba.cl')";
    connection.query(sql, (err, result) => {
        if (err) throw err;
        console.log('se ha incertado un cliente');
    })
})
