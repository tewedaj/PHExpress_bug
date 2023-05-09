
    const sequelize = require('../models/sequelize');
    const TestModel3 = require('../models/TestModel3');

        
export async function getTestModel3(){
        return new Promise((resolve,reject) =>{
            TestModel3.findAll().then((res)=>{
               resolve(res);
            }).catch((err)=>{
                reject(err);
            })
        })
       
      
    }
     
 

        
     
     export async function getByid(id_value){
      TestModel3.findAll({
            where: {
              id: id_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getByusername(username_value){
      TestModel3.findAll({
            where: {
              username: username_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getBypassword(password_value){
      TestModel3.findAll({
            where: {
              password: password_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getByuserid(userid_value){
      TestModel3.findAll({
            where: {
              userid: userid_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
     
 
 
        
     export async  function setTestModel3(TestModel3_object){
            TestModel3.create(TestModel3_object).then((res)=>{
                return true;
            }).catch((err)=>{
                return false;
            });
        }
     
 

        
        export async function updateByid(id_data,object){
       await TestModel3.update(object, {
            where: {
              id: id_data
            }
          });
        }
    
        export async function updateByusername(username_data,object){
       await TestModel3.update(object, {
            where: {
              username: username_data
            }
          });
        }
    
        export async function updateBypassword(password_data,object){
       await TestModel3.update(object, {
            where: {
              password: password_data
            }
          });
        }
    
        export async function updateByuserid(userid_data,object){
       await TestModel3.update(object, {
            where: {
              userid: userid_data
            }
          });
        }
    

    