const eventEmitter = require('events');


//create Class
class MyEmitter extends eventEmitter {}

//init Object
const myEmitter =  new MyEmitter();

//event Listener
myEmitter.on('event', () => console.log('Event Fired!'))

//init event
myEmitter.emit('event');
myEmitter.emit('event');
myEmitter.emit('event');
myEmitter.emit('event');