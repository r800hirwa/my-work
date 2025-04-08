const express=require("express");
const mysql=require("mysql2");
const nodemailer=require("nodemailer");
const app=express();
const port=2000;
app.get("/:name",(req,res)=>({
    const name=req.params.name;
    res.send(`welcame on ${name}`);
   // res.json({message:})
    const db=mysql.createConnection({
        host:"localhost",
        username:"root",
        password:"",
        database:"work"
    });
    db.connect((err)=>{
        if(err){
        console.err(`failed`,err);
    }
    else{
        console.log("database connected");
    }
    });
    const transporter = nodemailer.createTransport({
        host:"Mail.dtecsoftwaresolution.com",
        port:"465",
        secure:"true",
        auth:{
        user:"demo@dtecsoftwaresolution.com",
        pass:"pvEpvmftkbu1Go"
        }
});
transporter.verify((error,success)=>
        console.error("SMTP SERVER FAILED TO CONNECT",ERROR);
)

app.listen(port,()=>{
    console.log(`our port is readly ${port}`);
});