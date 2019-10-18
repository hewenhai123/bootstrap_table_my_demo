
const express =require('express');
const path=require('path');
const app=express();

app.use('/public',express.static('public'));



app.get('/',(req,res)=>{
    res.sendFile(path.join(__dirname,"/index.html"))
})


app.get('/data1.json',(req,res)=>{
    res.sendFile(path.join(__dirname,"/data1.json"))
})



const server=app.listen(8090,()=>{

    let host=server.address().address;
    let port=server.address().port;
    console.log('服务器已经启动',host,port)

})
