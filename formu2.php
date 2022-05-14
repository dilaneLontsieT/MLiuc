
<?php
 
 if( isset($valider)){
    $ch= $_POST["ch"];
    $valider= $_POST["valider"]; 
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
    <link rel="stylesheet" href="formu2.css">
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
                    <a href="updatesE.php"><span class="las la-business-time" ></span>
                    <span>Mise à jour </span></a>
                </li>
                <li>
                    <a href="profil.php"><span class="las la-user-circle" ></span>
                    <span>Profil</span></a>
                </li>
                  <li>
                    <a href="deconnexion.php"><span class="las la-igloo" ></span>
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
                    <!-- <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h2>Matières Semestre 1</h2>

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

                                        <tr>
                                            <td>Algèbre de boole</td>
                                            <td>2</td>
                                            <td><span class="status purple"></span> Systèmes</td>
                                        </tr>
                                        <tr>
                                            <td>Architecture des ordinateurs</td>
                                            <td>2</td>
                                            <td><span class="status purple"></span> Systèmes</td>
                                        </tr>
                                        <tr>
                                            <td>Système d'éxploitation</td>
                                            <td>3</td>
                                            <td><span class="status purple"></span> Systèmes</td>
                                        </tr>
                                        <tr>
                                            <td>Programmation orientée objet</td>
                                            <td>6</td>
                                            <td><span class="status orange"></span> Programmation</td>
                                        </tr>
                                        <tr>
                                            <td>Java avancée</td>
                                            <td>3</td>
                                            <td><span class="status orange"></span> Programmation</td>
                                        </tr>
                                        <tr>
                                            <td>Bases de donnée</td>
                                            <td>2</td>
                                            <td><span class="status blue"></span> Dev logiciel</td>
                                        </tr>
                                        <tr>
                                            <td>Méthode UML</td>
                                            <td>3</td>
                                            <td><span class="status blue"></span> Dev logiciel</td>
                                        </tr>
                                        <tr>
                                            <td>Développement web</td>
                                            <td>4</td>
                                            <td><span class="status blue"></span> Dev logiciel</td>
                                        </tr>
                                        <tr>
                                            <td>Communication</td>
                                            <td>1</td>
                                            <td><span class="status pink"></span> SHES</td>
                                        </tr>
                                        <tr>
                                            <td>Connaissance de l'entreprise</td>
                                            <td>2</td>
                                            <td><span class="status pink"></span> SHES</td>
                                        </tr>
                                        <tr>
                                            <td>Sensibilisation à la sécurité</td>
                                            <td>1</td>
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
                                <p> <a href="formu1.html" > <input type="button"  class="but" value="Choisir" style="padding: 40px 30px;margin-left: 200px;
                                    border: none;
                                    padding: 10px 20px;background-color: rgb(7, 216, 7);font: 1em sans-serif;"> </a>
                                </p>
                            </div>
                        </div>
                    </div> -->

                    <div class="customers">
                        <div class="projects">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Matières Semestre 2</h2>

                                </div>

                                <div class="card-body" >
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

                                            <input type="checkbox" name="ch[]" value="Projet deve appli -Analyse" />  Projet deve appli -Analyse </br>
                                            <input type="checkbox" name="ch[]" value="Projet deve appli -Realisation" />  Projet deve appli -Realisation </br>
                                            <input type="checkbox" name="ch[]" value="C et programmation système" />  C et programmation système</br>
                                            <input type="checkbox" name="ch[]" value="Réseaux TCP/IP" />  Réseaux TCP/IP</br>
                                            <input type="checkbox" name="ch[]" value="Initialisation à MATLAB" /> Initialisation à MATLAB</br>
                                            <input type="checkbox" name="ch[]" value="analyse_fourier" />  Analyse de Fourier</br>
                                            <input type="checkbox" name="ch[]" value="Probabilités et statistiques" />  Probabilités et statistiques</br>
                                            <input type="checkbox" name="ch[]" value="electronique" />  Electronique</br>
                                            <input type="checkbox" name="ch[]" value="Technique de gestion de projet" />  Technique de gestion de projet</br>
                                            <input type="checkbox" name="ch[]" value="Système d'information de l'entreprise" />  Système d'information de l'entreprise</br>
                                            <input type="checkbox" name="ch[]" value="Présentation juridique et institutionnelle" />  Présentation juridique et institutionnelle</br>
                                            <input type="checkbox" name="ch[]" value="Economie d'entreprise" />  Economie d'entreprise</br>
                                            <input type="checkbox" name="ch[]" value="Projet professionel" />  Projet professionel</br>
                                            <input type="checkbox" name="ch[]" value="Anglais" />  Anglais</br>
                                            <input type="checkbox" name="ch[]" value="Langue_vivante2" />  Langue_vivante2</br>
                                            <input type="submit" name="valider" value="Enregistrer"/>

                                                
                                            </form

                                          <tr> 
                                            <!-- <td>Projet Dev Appli - Analyse</td>
                                            <td><span class="status purple"></span> Informatique</td>
                                            <td> <input type="checkbox" name="colors" value="projet dev appli" /></td>
                                            </tr>
                                        <tr>
                                                <td>Projet Dev Appli - Realisation</td>
                                                <td><span class="status purple"></span> Informatique</td>
                                                <td> <input type="checkbox" name="colors" value="projet dev realisation" /></td>
                                            </tr>
                                            <tr>
                                                <td>C et programmation système</td>
                                                <td><span class="status purple"></span> Informatique</td>
                                                <td> <input type="checkbox" name="colors" value="C et programmation système" /></td>
                                            </tr>
                                            <tr>
                                                <td>Réseaux TCP/IP</td>
                                                <td><span class="status purple"></span> Informatique</td>
                                                <td> <input type="checkbox" name="colors" value="Réseaux" /></td>
                                            </tr>
                                            <tr>
                                                <td>Initialisation à MATLAB</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                                <td> <input type="checkbox" name="colors" value="Initialisation à MATLAB" /></td>
                                            </tr>
                                            <tr>
                                                <td>Probabilités et statistiques</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                                <td> <input type="checkbox" name="colors" value="Probabilités et statistiques" /></td>
                                            </tr>
                                            <tr>
                                                <td>Analyse de Fourier</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                                <td> <input type="checkbox" name="colors" value="Analyse de Fourier" /></td>
                                            </tr>
                                            <tr>
                                                <td>Electronique</td>
                                                <td><span class="status blue"></span> Science de l'ingenieur</td>
                                                <td> <input type="checkbox" name="colors" value="Electronique" /></td>
                                            </tr>
                                            <tr>
                                                <td>Technique de gestion de projet</td>
                                                <td><span class="status pink"></span> SHES</td>
                                                <td> <input type="checkbox" name="colors" value="Technique de gestion de projet" /></td>
                                            </tr>
                                            <tr>
                                                <td>Système d'information de l'entreprise</td>
                                                <td><span class="status pink"></span> SHES</td>
                                                <td> <input type="checkbox" name="colors" value="Système d'information de l'entreprise" /></td>
                                            </tr>
                                            <tr>
                                                <td>Economie d'entreprise</td>
                                                <td><span class="status pink"></span> SHES</td>
                                                <td> <input type="checkbox" name="colors" value="Economie d'entreprise" /></td>
                                            </tr>
                                            <tr>
                                                <td>Présentation juridique et institutionnelle</td>
                                                <td><span class="status pink"></span> SHES</td>
                                                <td> <input type="checkbox" name="colors" value="Présentation juridique et institutionnelle" /></td>
                                            </tr>
                                            <tr>
                                                <td>Projet professionel</td>
                                                <td><span class="status pink"></span> SHES</td>
                                                <td> <input type="checkbox" name="colors" value="Projet professionel" /></td>
                                            </tr>
                                            <tr>
                                                <td>Anglais</td>
                                                <td><span class="status pink"></span> SHES</td>
                                                <td> <input type="checkbox" name="colors" value="Anglais" /></td>
                                            </tr>
                                            <tr>
                                                <td>Langue vivante 2</td>
                                                <td><span class="status pink"></span> SHES</td>
                                                <td> <input type="checkbox" name="colors" value="Langue vivante 2" /></td>
                                            </tr> --> 

                                        </tbody>

                                    </table>
                                    <?php    
        if( isset($_POST["valider"])){
            $ch=$_POST["ch"];
            $valider= $_POST["valider"];  
            echo" Vous avez choché les cases suivantes:<br/>";
            
            foreach($_POST["ch"] as $value){
                echo " ".$value.'<br/>';
            }
            echo "<hr />";

        $con=mysqli_connect('localhost','root','','mliuc');

        if(mysqli_connect_errno())
            {
	        echo 'Failed to connect '.mysqli_connect_error();
            }

            // $sql="INSERT INTO matieres"
       }
     
?> 

                                </div>
                                <!-- <p> <a href="formu2.html" > <input type="button"  class="but" value="Choisir" style="padding: 40px 30px;margin-left: 200px;
                                    border: none;
                                    padding: 10px 20px;background-color: rgb(7, 216, 7);font: 1em sans-serif;"> </a>
                                </p> -->
                            </div>
                        </div>

                    </div>

                </div>

        </main>
    </div>
</body>

</html>