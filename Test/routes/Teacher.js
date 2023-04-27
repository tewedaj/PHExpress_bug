
    var Teacher_controller = require("../controller/TeacherController");
    //auto generated file 
 
    
    $app = new phexpress();
    $app->setParent("Teacher");

    
    app.get("/", function (req, res) {
        Teacher_controller.getTeacher();
    });
     
 
 
    
    
    app.get("/getByid/:id", function (req, res) {
        Teacher_controller.getByid(req.params.id).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByname/:name", function (req, res) {
        Teacher_controller.getByname(req.params.name).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getByage/:age", function (req, res) {
        Teacher_controller.getByage(req.params.age).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

    
    
    app.get("/getBysex/:sex", function (req, res) {
        Teacher_controller.getBysex(req.params.sex).then((response)=>{
            
            res.status(200).send(response);

        }).catch((err)=>{
            res.status(500).send(err);

        })
    });

     
 

    


    