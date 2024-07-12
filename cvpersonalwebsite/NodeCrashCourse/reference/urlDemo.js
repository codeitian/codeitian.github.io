const url = require('url');

const myLink = new URL("https://codeitian.github.io/cvpersonalwebsite/index.html?id=100&status=active");

//Serialized URL
console.log(myLink.href);
console.log(myLink.toString());

//HOST
console.log(myLink.host);

//HOSTname does not get port
console.log(myLink.hostname);

//pathname
console.log(myLink.pathname);

//query
console.log(myLink.search);

//params object
// console.log(myLink.searchParams);

//add params object
myLink.searchParams.append('abc', '123')
console.log(myLink.searchParams);

//loop through params
myLink.searchParams.forEach((value, name) =>{
    console.log(`${name}: ${value}`);
})