
    const sequelize = require('../models/sequelize');
    const User = require('../models/User');

        
export async function getUser(){
        return new Promise((resolve,reject) =>{
            User.findAll().then((res)=>{
               resolve(res);
            }).catch((err)=>{
                reject(err);
            })
        })
       
      
    }
     
 

        
     
     export async function getByid(id_value){
      User.findAll({
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
      User.findAll({
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
      User.findAll({
            where: {
              password: password_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
     
 
 
        
     export async  function setUser(User_object){
            User.create(User_object).then((res)=>{
                return true;
            }).catch((err)=>{
                return false;
            });
        }
     
 

        
        export async function updateByid(id_data,object){
       await User.update(object, {
            where: {
              id: id_data
            }
          });
        }
    
        export async function updateByusername(username_data,object){
       await User.update(object, {
            where: {
              username: username_data
            }
          });
        }
    
        export async function updateBypassword(password_data,object){
       await User.update(object, {
            where: {
              password: password_data
            }
          });
        }
    

    