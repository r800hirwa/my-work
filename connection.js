const mysql=require("mysql2");
const sql=mysql.createConnection({
    host:"localhost",
    user:"root",
    password:"",
    db:"project",

});
sql.connect((err)=>{
    if(err){
        console.err("connection failed",err);
    }
    else{
        console.log("connection successfully");
    }
});
const responsemessage=`API SUCCESS,${name}`;
const sql="INSERT INTO api(response) VALUES(?)";
db.query(sql,[respnsemessage],(err,result)=>{
    if(err){
        console.err("error inserting in database",err);
    }
    else{
console.log("message Saved",responsemessage);
    }


});