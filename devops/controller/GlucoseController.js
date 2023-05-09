
    const sequelize = require('../models/sequelize');
    const Glucose = require('../models/Glucose');

        
export async function getGlucose(){
        return new Promise((resolve,reject) =>{
            Glucose.findAll().then((res)=>{
               resolve(res);
            }).catch((err)=>{
                reject(err);
            })
        })
       
      
    }
     
 

        
     
     export async function getByid(id_value){
      Glucose.findAll({
            where: {
              id: id_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getByuserid(userid_value){
      Glucose.findAll({
            where: {
              userid: userid_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getBymgdl(mgdl_value){
      Glucose.findAll({
            where: {
              mgdl: mgdl_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getBycarb(carb_value){
      Glucose.findAll({
            where: {
              carb: carb_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getByinsuline(insuline_value){
      Glucose.findAll({
            where: {
              insuline: insuline_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
     
 
 
        
     export async  function setGlucose(Glucose_object){
            Glucose.create(Glucose_object).then((res)=>{
                return true;
            }).catch((err)=>{
                return false;
            });
        }
     
 

        
        export async function updateByid(id_data,object){
       await Glucose.update(object, {
            where: {
              id: id_data
            }
          });
        }
    
        export async function updateByuserid(userid_data,object){
       await Glucose.update(object, {
            where: {
              userid: userid_data
            }
          });
        }
    
        export async function updateBymgdl(mgdl_data,object){
       await Glucose.update(object, {
            where: {
              mgdl: mgdl_data
            }
          });
        }
    
        export async function updateBycarb(carb_data,object){
       await Glucose.update(object, {
            where: {
              carb: carb_data
            }
          });
        }
    
        export async function updateByinsuline(insuline_data,object){
       await Glucose.update(object, {
            where: {
              insuline: insuline_data
            }
          });
        }
    

    