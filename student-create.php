<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <title>criar aluno</title>
    </head>
<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Adicionar aluno
                        <a href=index.php class="btn btn-danger float-end"> VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Telefone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Curso</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_student" class="btn btn-primary">Salvar Aluno</button>
                        </div>
                        
                    

                    </form>
                </div>
            </div>
        </div>
    </div>



    
</body>
</html>