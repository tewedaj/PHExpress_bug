
    const sequelize = require('../models/sequelize');
    const Student = require('../models/Student');

        
async function getStudent(){
        return new Promise((resolve,reject) =>{
            Student.findAll().then((res)=>{
               resolve(res);
            }).catch((err)=>{
                reject(err);
            })
        })
       
      
    }
     
 

        
     
     async function getByid(id_value){
      Student.findAll({
            where: {
              id: id_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     async function getByusername(username_value){
      Student.findAll({
            where: {
              username: username_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
    
     
     async function getBypassword(password_value){
      Student.findAll({
            where: {
              password: password_value
            }
          }).then((res)=>{
            resolve(res);
          }).catch((err)=>{
             reject(err);
          })

         
    }
    
     
 
 
        
        function setStudent(Student_object){
            Student.create(Student_object).then((res)=>{
                return true;
            }).catch((err)=>{
                return false;
            });
        }
     
 

        
        public function updateByid(id_data,object){
       await Student.update(object, {
            where: {
              id: id_data
            }
          });
        }
    
        public function updateByusername(username_data,object){
       await Student.update(object, {
            where: {
              username: username_data
            }
          });
        }
    
        public function updateBypassword(password_data,object){
       await Student.update(object, {
            where: {
              password: password_data
            }
          });
        }
    

    