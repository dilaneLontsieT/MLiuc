<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MLIUC Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>MLIUC</span></h2>
        </div>

        <div class="sidebar-menu">
           <ul>
                <li>
                    <a href="indexEtudiant.php" class="active"><span class="las la-table" ></span>
                    <span>Requetes</span></a>
                </li>
                <li>
                    <a href="matiereEt.php"><span class="las la-bookmark" ></span>
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
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                    </label> Requetes
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Recherche ici" />
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

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>4</h1>
                        <span>Matieres à rattraper</span>
                    </div>
                    <div>
                        <span class="las la-bookmark"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>3IL3</h1>
                        <span>Classe</span>
                    </div>
                    <div>
                        <span class="las la-user-graduate"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span>Session</span>
                    </div>
                    <div>
                        <span class="las la-business-time"></span>

                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2021-2022</h1>
                        <span>Année scolaire</span>
                    </div>
                    <div>
                        <span class="las la-calendar"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Mes Matieres</h3>

                            <a href="matiere.html"> 
                                <!-- <button>Tout voir <span class="las la-arrow-right">
                                 </span></button> -->
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Matieres</td>
                                            <td>Coeficient</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Java avancée</td>
                                            <td>POO</td>
                                            <td>
                                                <span class="status purple"></span> En progression
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Developpement Web</td>
                                            <td>Base de donnée</td>
                                            <td>
                                                <span class="status pink"></span> Terminé
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>UML</td>
                                            <td>Architecture des ordinateurs</td>
                                            <td>
                                                <span class="status orange"></span> A Revoir
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Java avancée</td>
                                            <td>POO</td>
                                            <td>
                                                <span class="status purple"></span> En progression
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Developpement Web</td>
                                            <td>Base de donnée</td>
                                            <td>
                                                <span class="status pink"></span> Terminé
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>UML</td>
                                            <td>Architecture des ordinateurs</td>
                                            <td>
                                                <span class="status orange"></span> A Revoir
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Java avancée</td>
                                            <td>POO</td>
                                            <td>
                                                <span class="status purple"></span> En progression
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Developpement Web</td>
                                            <td>Base de donnée</td>
                                            <td>
                                                <span class="status pink"></span> Terminé
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>UML</td>
                                            <td>Architecture des ordinateurs</td>
                                            <td>
                                                <span class="status orange"></span> A Revoir
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Java avancée</td>
                                            <td>POO</td>
                                            <td>
                                                <span class="status purple"></span> En progression
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="students">
                    <div class="card">
                        <div class="card-header">
                            <h3>Nouveaux Inscrits</h3>

                            <button>Tout voir <span class="las la-arrow-right">
                        </span></button>
                        </div>

                        <div class="card-body">
                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Lewis Cunnigham</h4>
                                        <small>Etudiant</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Lewis Cunnigham</h4>
                                        <small>Etudiant</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Lewis Cunnigham</h4>
                                        <small>Etudiant</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Lewis Cunnigham</h4>
                                        <small>Etudiant</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="student">
                                <div class="info">
                                    <img src="index.jpg" width="40px" heigt="40px" alt="">
                                    <div>
                                        <h4>Lewis Cunnigham</h4>
                                        <small>Etudiant</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>

                    </div> -->

                <!-- </div> -->
            </div>
    </div>
    </main>


</body>

</html>