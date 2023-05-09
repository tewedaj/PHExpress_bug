
    const sequelize = require('../models/sequelize');
    const Teacher = require('../models/Teacher');

        
export async function getTeacher(){
        return new Promise((resolve,reject) =>{
            Teacher.findAll().then((res)=>{
               resolve(res);
            }).catch((err)=>{
                reject(err);
            })
        })
       
      
    }
     
 

        
     
     export async function getByid(id_value){
      Teacher.findAll({
            where: {
              id: id_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getByname(name_value){
      Teacher.findAll({
            where: {
              name: name_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getByage(age_value){
      Teacher.findAll({
            where: {
              age: age_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     export async function getBysex(sex_value){
      Teacher.findAll({
            where: {
              sex: sex_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
     
 
 
        
     export async  function setTeacher(Teacher_object){
            Teacher.create(Teacher_object).then((res)=>{
                return true;
            }).catch((err)=>{
                return false;
            });
        }
     
 

        
        export async function updateByid(id_data,object){
       await Teacher.update(object, {
            where: {
              id: id_data
            }
          });
        }
    
        export async function updateByname(name_data,object){
       await Teacher.update(object, {
            where: {
              name: name_data
            }
          });
        }
    
        export async function updateByage(age_data,object){
       await Teacher.update(object, {
            where: {
              age: age_data
            }
          });
        }
    
        export async function updateBysex(sex_data,object){
       await Teacher.update(object, {
            where: {
              sex: sex_data
            }
          });
        }
    

    