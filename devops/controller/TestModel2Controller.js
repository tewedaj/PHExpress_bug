
    const sequelize = require('../models/sequelize');
    const TestModel2 = require('../models/TestModel2');

        
export async function getTestModel2(){
        return new Promise((resolve,reject) =>{
            TestModel2.findAll().then((res)=>{
               resolve(res);
            }).catch((err)=>{
                reject(err);
            })
        })
       
      
    }
     
 

        
     
     export async function getByid(id_value){
      TestModel2.findAll({
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
      TestModel2.findAll({
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
      TestModel2.findAll({
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
      TestModel2.findAll({
            where: {
              userid: userid_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
     
 
 
        
     export async  function setTestModel2(TestModel2_object){
            TestModel2.create(TestModel2_object).then((res)=>{
                return true;
            }).catch((err)=>{
                return false;
            });
        }
     
 

        
        export async function updateByid(id_data,object){
       await TestModel2.update(object, {
            where: {
              id: id_data
            }
          });
        }
    
        export async function updateByusername(username_data,object){
       await TestModel2.update(object, {
            where: {
              username: username_data
            }
          });
        }
    
        export async function updateBypassword(password_data,object){
       await TestModel2.update(object, {
            where: {
              password: password_data
            }
          });
        }
    
        export async function updateByuserid(userid_data,object){
       await TestModel2.update(object, {
            where: {
              userid: userid_data
            }
          });
        }
    

    