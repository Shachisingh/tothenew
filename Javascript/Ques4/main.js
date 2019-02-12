// First Object
var obj1 = {a:1, b:2, c:{a:3, b:4}}

// Second Object
var obj2 = Object.assign(obj1) // Object.assign() - copies one object to another object

// Showing the contents of "Second Object"
document.write("Contents of Second Object are: " + JSON.stringify(obj2))

// Logging the result into console
console.log(JSON.stringify(obj2))
