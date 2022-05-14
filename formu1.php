
<?php   
      
     
       $ch= $_POST["ch"];
       $valider= $_POST["valider"];  
        if( isset($valider)){
            echo" Vous avez choché les cases suivantes:<br/>";
            echo @implode(" - ",$ch );
            echo "<hr />";
       }
     
?>    


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MLIUC Matieres</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="formu1.css">
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>MLIUC</span></h2>
        </div>

        <div class="sidebar-menu">
          <ul>
                <li>
                    <a href="indexEtudiant.php" ><span class="las la-table" ></span>
                    <span>Requetes</span></a>
                </li>
                <li>
                    <a href="matiereEt.php" class="active"><span class="las la-bookmark" ></span>
                    <span>Matieres</span></a>
                </li>
            
                <li>
                    <a href="updates.php"><span class="las la-business-time" ></span>
                    <span>Mise à jour </span></a>
                </li>
                <li>
                    <a href="profil.php"><span class="las la-user-circle" ></span>
                    <span>Profil</span></a>
                </li>
                  <li>
                    <a href="deconnexion.php"><span class="las la-user-graduate" ></span>
                    <span>Deconnexion</span></a>
                </li> 
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label> Matieres
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Rechercher ici" />
            </div>

            <div class="user-wrapper">
                <img src="admin.png" width="35px" height="30px" alt="">
                <div>
                    <h4>Dilane LONTSIE</h4>
                    <small>Etudiante</small>
                </div>
            </div>
        </header>

        <main>
            <!-- <P>
                <h3>Choisissez le semestre :</h3>
                <SELECT name="langage">
                <option>Faire un choix</option>   
                <OPTION>Semestre 1
                <OPTION>Semestre 2
               
               
            </p> -->
            </SELECT>
                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h2>Matières Semestre 1</h2>

                            </div>

                            <div class="card-body">
                            
                                <table width="100%">

                                    <!-- <thead>
                                        <tr>
                                            <td>Matière</td>
                                            <td>Module</td>
                                            <td>Choisir</td>

                                        </tr>
                                    </thead> -->
                                    <tbody>
                                     
                                       <form name="fo1" method="post" action=""  > 

                                            <input type="checkbox" name="ch[]" value="algebreB" />  Algèbre de Boole </br>
                                            <input type="checkbox" name="ch[]" value="archi" />  Architecture des ordinateurs</br>
                                            <input type="checkbox" name="ch[]" value="systemeE" />  systeme d'exploitation</br>
                                            <input type="checkbox" name="ch[]" value="poo" />  Programmation orientée objet</br>
                                            <input type="checkbox" name="ch[]" value="java" />  Java avancé</br>
                                            <input type="checkbox" name="ch[]" value="baseD" />  Base de données</br>
                                            <input type="checkbox" name="ch[]" value="uml" />  Methode UML</br>
                                            <input type="checkbox" name="ch[]" value="web" />  Developpement web</br>
                                            <input type="checkbox" name="ch[]" value="communication" />  Communication</br>
                                            <input type="checkbox" name="ch[]" value="Connaissance" />  Connaissance de l'entreprise</br>
                                            <input type="checkbox" name="ch[]" value="sensibilisation" />  Sensibilisation à la securité</br>
                                            <input type="checkbox" name="ch[]" value="anglais" />  Anglais</br>
                                            <input type="checkbox" name="ch[]" value="chinois" />  Langue_vivante1</br>
                                            <input type="submit" name="valider" value="Enregistrer"/>

                                                  
                                        </form
                                              
                                    </tbody> 
                                  
                                </table>

                   </div>
                        </div>
                        
                        
                    </div>

                    <!-- <div class="customers">
                        <div class="projects">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Matières Semestre 2</h2>

                                </div>

                                <div class="card-body">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>Matière</td>
                                                <td>Coefficient</td>
                                                <td>Module</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <td>Projet Dev Appli - Analyse</td>
                                            <td>2</td>
                                            <td><span class="status purple"></span> Informatique</td>
                                            </tr>
                                            <tr>
                                                <td>Projet Dev Appli - Realisation</td>
                                                <td>2</td>
                                                <td><span class="status purple"></span> Informatique</td>
                                            </tr>
                                            <tr>
                                                <td>C et programmation système</td>
                                                <td>3</td>
                                                <td><span class="status purple"></span> Informatique</td>
                                            </tr>
                                            <tr>
                                                <td>Réseaux TCP/IP</td>
                                                <td>2</td>
                                                <td><span class="status purple"></span> Informatique</td>
                                            </tr>
                                            <tr>
                                                <td>Initialisation à MATLAB</td>
                                                <td>1</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                            </tr>
                                            <tr>
                                                <td>Probabilités et statistiques</td>
                                                <td>3</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                            </tr>
                                            <tr>
                                                <td>Analyse de Fourier</td>
                                                <td>3</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                            </tr>
                                            <tr>
                                                <td>Electronique</td>
                                                <td>3</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                            </tr>
                                            <tr>
                                                <td>Technique de gestion de projet</td>
                                                <td>2</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>
                                            <tr>
                                                <td>Système d'information de l'entreprise</td>
                                                <td>1</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>
                                            <tr>
                                                <td>Economie d'entreprise</td>
                                                <td>2</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>
                                            <tr>
                                                <td>Présentation juridique et institutionnelle</td>
                                                <td>1</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>
                                            <tr>
                                                <td>Projet professionel</td>
                                                <td>2</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>
                                            <tr>
                                                <td>Anglais</td>
                                                <td>2</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>
                                            <tr>
                                                <td>Langue vivante 2</td>
                                                <td>2</td>
                                                <td><span class="status pink"></span> SHES</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <p> <a href="formu2.html" > <input type="button"  class="but" value="Choisir" style="padding: 40px 30px;margin-left: 200px;
                                    border: none;
                                    padding: 10px 20px;background-color: rgb(7, 216, 7);font: 1em sans-serif;"> </a>
                                </p>
                            </div>
                        </div>

                    </div> -->

                </div>

        </main>
    </div>
</body>

</html>