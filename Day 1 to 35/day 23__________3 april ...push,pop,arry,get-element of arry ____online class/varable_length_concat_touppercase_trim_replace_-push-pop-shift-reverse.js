// how to find character length of variable ? 
let i = "aBcde12345"
console.log(i.length)
//__________________________________________________
// upper case and lower case
console.log(i.toUpperCase())
console.log(i.toLocaleLowerCase())
//__________________________________________________
// conocation mean connect two variables 
let a = "ali"
let b = "junaid"
console.log(a.concat(b,b,a))
//__________________________________________________
// remove space from right and left side of variable
let x = "   abc   123   "
console.log(x.trim())
//__________________________________________________
// replace any word 
let contant = " mooost commonly refers to a Dutch mooost  term meaning cash or ready money (e.g., contant betalen - to pay in cash). It is also a surname, a location in the U.S. Virgin Islands, and a brand name for content services or powersports dealerships.  "
console.log(contant.replace("mooost","must,,,,"))
console.log(contant.replaceAll("mooost","must,,,,"))
 //_________________________________________________
 // array 
 let array = ["ali","ayesha","noor",1,2,'3']
 console.log(array)
array.push("xyz",123) // add element from end side 
console.log(array)
// console.log(array.push("xyz",123))// answer is "10"
array.pop() //  take element from end side 
console.log(array)
array.unshift("unshift_element ",222) // add element from start side 
console.log(array)
let remove = array.pop(); // save value in remove and also update the array
console.log(remove) // only remove element 
console.log(array) // updated array 
array.shift() // remove element from start side 
console.log(array)
console.log(array.reverse())
console.log(i.concat(array))
console.log(array[3])
