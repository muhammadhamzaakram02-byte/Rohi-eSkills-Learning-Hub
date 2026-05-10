let x = 0 ; 
while(x <9){
    console.log(x)
    x ++ ;
}
console.log("__________________________________")

do{
    console.log("this is do while loop")
    x = 40;
}while (x==50) //___________

// let i = 1 ; this is wrong 

for(let i = 0 ;i<20;i++){
    console.log(i)
    if(i==5){
        console.log("the statement is continue ")
        continue; // ____________
    }
    if(i==12){
        console.log("this is break ");
        break; //_______________
    }
    console.log(i)
}