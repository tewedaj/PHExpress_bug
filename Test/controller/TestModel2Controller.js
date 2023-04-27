
    const sequelize = require('../models/sequelize');
    const TestModel2 = require('../models/TestModel2');

        
async function getTestModel2(){
        return new Promise((resolve,reject) =>{
            TestModel2.findAll().then((res)=>{
               resolve(res);
            }).catch((err)=>{
                reject(err);
            })
        })
       
      
    }
     
 

        
     
     async function getByid(id_value){
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
    
    
     
     async function getByusername(username_value){
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
    
    
     
     async function getBypassword(password_value){
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
    
    
     
     async function getByuserid(userid_value){
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
    
     
 
 
        
        function setTestModel2(TestModel2_object){
            TestModel2.create(TestModel2_object).then((res)=>{
                return true;
            }).catch((err)=>{
                return false;
            });
        }
     
 

        
        public function updateByid(id_data,object){
       await TestModel2.update(object, {
            where: {
              id: id_data
            }
          });
        }
    
        public function updateByusername(username_data,object){
       await TestModel2.update(object, {
            where: {
              username: username_data
            }
          });
        }
    
        public function updateBypassword(password_data,object){
       await TestModel2.update(object, {
            where: {
              password: password_data
            }
          });
        }
    
        public function updateByuserid(userid_data,object){
       await TestModel2.update(object, {
            where: {
              userid: userid_data
            }
          });
        }
    

    