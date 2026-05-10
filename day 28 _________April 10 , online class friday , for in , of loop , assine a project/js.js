let a , b , c , d , e , f ,g ;
a = 'a 4'
for (const key in a) {
    console.log(key)
  }
for (const key in a) {
    console.log(a[key])
  }
for (const key of a) {
    console.log(key)
  }
b = {
    name : "abc",
    class : 4,
    address : "fg",
}
for (const key in b) {
    console.log(key , b[key ])
  }
  for (const key in b) {
    console.log(b[key])
  }
for (const key of a) {
    console.log(key )
  }
//   this is wrong not use for of loop for object okay 
//   for (const key of b) {
    // console.log(b[key])
//   }