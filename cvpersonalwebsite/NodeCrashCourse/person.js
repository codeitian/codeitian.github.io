// const person = {
//     name: "John Doe",
//     age: 30
// }

// console.log(__filename, __dirname)

class Person {
    constructor(name, age){
        this.name = name;
        this.age = age;
    }

    greeting(){
        console.log(`Hello! My name is ${this.name} and I am ${this.age} years old.`)
    }
}



module.exports = Person;