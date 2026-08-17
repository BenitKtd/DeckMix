<?php 
// Sécurité pour définir explicitement la variable connectée
$estConnecte = isset($_COOKIE['deckmix_auth']) && $_COOKIE['deckmix_auth'] == '1';

get_header(); 

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

if ($page == 'accueil'): ?>
    
    <?php if (!$estConnecte): ?>
        <div class="alert bg-dark border border-secondary text-white p-4 rounded-4 mb-4 d-flex justify-content-between align-items-center">
            <div>
                <strong class="text-warning fs-5">⚡ Profitez à 100% de DeckMix</strong><br>
                <span class="text-white small">Créez un compte gratuit pour exporter des Decks vers Spotify & Apple Music ou interagir sur le forum.</span>
            </div>
            <button class="btn btn-deckmix px-4" data-bs-toggle="modal" data-bs-target="#registerModal">Rejoindre gratuitement</button>
        </div>
    <?php endif; ?>

    <h1 class="mb-4 fw-bold">Playlists à la une</h1>
    <div class="row g-4">
        <!-- Carte Kanye West -->
        <div class="col-md-4">
            <div class="playlist-card">
                <div class="rounded-4 mb-3 overflow-hidden" style="height: 185px;">
                    <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600&auto=format&fit=crop&q=80" alt="Graduation" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h5 class="fw-bold mb-1">Every Kanye West Songs</h5>
                <p class="text-white small mb-3">Playlist créée par Gloutobob le 26 mars 2026</p>
                <div class="d-flex gap-2 mb-3 flex-wrap">
                    <span class="badge-tag">Kanye West : 100%</span>
                    <span class="badge-tag">292 titres</span>
                    <span class="badge-tag">Hip-Hop</span>
                </div>
                <div class="d-flex gap-2">
                    <a href="?page=lecteur" class="btn btn-deckmix btn-sm px-4 text-dark text-decoration-none">Écouter</a>
                    <button class="btn btn-dark btn-sm px-4 text-white border border-secondary" style="border-radius: 20px;">Enregistrer</button>
                </div>
            </div>
        </div>

        <!-- Carte Tyler, The Creator -->
        <div class="col-md-4">
            <div class="playlist-card">
                <div class="rounded-4 mb-3 overflow-hidden" style="height: 185px;">
                    <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600&auto=format&fit=crop&q=80" alt="Tyler The Creator" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h5 class="fw-bold mb-1">Flower Boy Sessions</h5>
                <p class="text-white small mb-3">Playlist créée par LeMinotoror</p>
                <div class="d-flex gap-2 mb-3 flex-wrap">
                    <span class="badge-tag">Tyler : 95%</span>
                    <span class="badge-tag">142 titres</span>
                    <span class="badge-tag">Rap / Lo-Fi</span>
                </div>
                <div class="d-flex gap-2">
                    <a href="?page=lecteur" class="btn btn-deckmix btn-sm px-4 text-dark text-decoration-none">Écouter</a>
                    <button class="btn btn-dark btn-sm px-4 text-white border border-secondary" style="border-radius: 20px;">Enregistrer</button>
                </div>
            </div>
        </div>

        <!-- Carte PNL -->
        <div class="col-md-4">
            <div class="playlist-card">
                <div class="rounded-4 mb-3 overflow-hidden" style="height: 185px;">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=600&auto=format&fit=crop&q=80" alt="PNL" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h5 class="fw-bold mb-1">PNL DTF MOHA MMZ</h5>
                <p class="text-white small mb-3">Playlist créée par Soul Hitter</p>
                <div class="d-flex gap-2 mb-3 flex-wrap">
                    <span class="badge-tag">Cloud Rap</span>
                    <span class="badge-tag">180 titres</span>
                </div>
                <div class="d-flex gap-2">
                    <a href="?page=lecteur" class="btn btn-deckmix btn-sm px-4 text-dark text-decoration-none">Écouter</a>
                    <button class="btn btn-dark btn-sm px-4 text-white border border-secondary" style="border-radius: 20px;">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

<?php elseif ($page == 'parcourir'): ?>
    <h1 class="mb-4 fw-bold">Parcourir les playlists</h1>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="playlist-card">
                <div class="rounded-4 mb-3 overflow-hidden" style="height: 160px;">
                    <img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?w=600&auto=format&fit=crop&q=80" alt="Usher" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h5 class="fw-bold mb-1">Usher Confessions R&B</h5>
                <div class="d-flex gap-2 mb-3 mt-2 flex-wrap">
                    <span class="badge-tag">R&B : 100%</span>
                    <span class="badge-tag">Deck : 8 versions</span>
                </div>
                <a href="?page=lecteur" class="btn btn-deckmix btn-sm w-100 text-center text-dark text-decoration-none">Découvrir les playlists</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="playlist-card">
                <div class="rounded-4 mb-3 overflow-hidden" style="height: 160px;">
                    <img src="https://images.unsplash.com/photo-1498038432885-c6f3f1b912ee?w=600&auto=format&fit=crop&q=80" alt="Red Hot" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h5 class="fw-bold mb-1">Red Hot Chili Peppers Legends</h5>
                <div class="d-flex gap-2 mb-3 mt-2 flex-wrap">
                    <span class="badge-tag">Rock : 100%</span>
                    <span class="badge-tag">Deck : 15 versions</span>
                </div>
                <a href="?page=lecteur" class="btn btn-deckmix btn-sm w-100 text-center text-dark text-decoration-none">Découvrir les playlists</a>
            </div>
        </div>
    </div>

<?php elseif ($page == 'forum'): ?>
    <?php if (!$estConnecte): ?>
        <div class="alert bg-dark border border-warning text-center p-5 rounded-4">
            <h3 class="fw-bold text-warning mb-3">🔒 Espace verrouillé</h3>
            <p class="text-white mb-4">Vous devez être connecté pour accéder au forum et interagir avec la communauté.</p>
            <button class="btn btn-deckmix px-4" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter maintenant</button>
        </div>
    <?php else: ?>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="fw-bold mb-1">Discussions & Requêtes de la Communauté</h1>
                <p class="text-white small">Échangez avec les autres membres et découvrez de nouvelles playlists.</p>
            </div>
            <button class="btn btn-deckmix" data-bs-toggle="modal" data-bs-target="#createPostModal">Créer un poste</button>
        </div>
        
        <div class="card bg-dark border border-secondary p-4 mb-3 rounded-4">
            <span class="badge bg-warning text-dark mb-2" style="width: fit-content; font-size: 10px;">Requête</span>
            <div class="forum-title">Recherche un Deck spécial Lo-Fi pour coder</div>
            <p class="text-white small mb-0">Posté par LeMinotoror le 11 Octobre 2025 – 12 réponses</p>
        </div>

        <div class="card bg-dark border border-secondary p-4 rounded-4">
            <span class="badge bg-secondary text-white mb-2" style="width: fit-content; font-size: 10px;">Discussion</span>
            <div class="forum-title">Des avis sur la nouvelle chanteuse de Linkin Park ?</div>
            <p class="text-white small mb-0">Posté par Roalmouth le 11 Aout 2025 – 21 réponses</p>
        </div>
    <?php endif; ?>

<?php elseif ($page == 'lecteur'): ?>
    <div class="row">
        <div class="col-md-5">
            <div class="playlist-card p-4">
                <div class="rounded-4 mb-3 overflow-hidden" style="height: 220px;">
                    <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600&auto=format&fit=crop&q=80" alt="Cover" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3 class="fw-bold mb-1">I Ain't Got Time!</h3>
                <p class="text-white small mb-3">Tyler, The Creator - Flower Boy</p>
                <div class="d-flex gap-2">
                    <button class="btn btn-deckmix btn-sm px-3">Enregistrer</button>
                    <button class="btn btn-dark btn-sm px-3 text-white border border-secondary" style="border-radius: 20px;">Exporter la playlist</button>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="playlist-card p-4">
                <h5 class="fw-bold mb-3">File d'attente / Titres</h5>
                <ul class="list-unstyled text-white small mb-0">
                    <li class="py-2 border-bottom border-secondary d-flex justify-content-between"><span>1. EARFQUAKE - Tyler, The Creator</span><span>3:10</span></li>
                    <li class="py-2 border-bottom border-secondary d-flex justify-content-between text-warning"><span>2. I Ain't Got Time! - Tyler, The Creator</span><span>3:26</span></li>
                    <li class="py-2 d-flex justify-content-between"><span>3. NEW MAGIC WAND - Tyler, The Creator</span><span>3:15</span></li>
                </ul>
            </div>
        </div>
    </div>

<?php elseif ($page == 'profil'): ?>
    <?php if (!$estConnecte): ?>
        <div class="alert bg-dark border border-warning text-center p-5 rounded-4">
            <h3 class="fw-bold text-warning mb-3">🔒 Profil verrouillé</h3>
            <p class="text-white mb-4">Veuillez vous connecter pour afficher votre profil et vos playlists enregistrées.</p>
            <button class="btn btn-deckmix px-4" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</button>
        </div>
    <?php else: ?>
        <div class="d-flex align-items-center gap-4 mb-4">
            <div class="user-avatar" style="width: 80px; height: 80px; font-size: 32px;">J</div>
            <div>
                <h1 class="fw-bold mb-0">John Doe</h1>
                <p class="text-white small">@JohnDoe – Membre depuis Septembre 2025</p>
            </div>
        </div>

        <div class="row g-3 mb-5">
            <div class="col-md-4">
                <div class="playlist-card text-center py-3">
                    <h3 class="fw-bold text-warning mb-0">5</h3>
                    <span class="text-white small">Playlists publiées</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="playlist-card text-center py-3">
                    <h3 class="fw-bold text-warning mb-0">12</h3>
                    <span class="text-white small">Playlists importées</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="playlist-card text-center py-3">
                    <h3 class="fw-bold text-warning mb-0">78</h3>
                    <span class="text-white small">Abonnés</span>
                </div>
            </div>
        </div>

        <h3 class="fw-bold mb-3">Playlists enregistrées</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="playlist-card">
                    <div class="rounded-4 mb-3 overflow-hidden" style="height: 150px;">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=600&auto=format&fit=crop&q=80" alt="PNL" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h5 class="fw-bold mb-1">PNL DTF MOHA MMZ</h5>
                    <p class="text-white small">Playlist créée par Soul Hitter</p>
                    <a href="?page=lecteur" class="btn btn-deckmix btn-sm w-100 mt-2 text-dark text-decoration-none">Écouter</a>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php elseif ($page == 'partager'): ?>
    <div class="row g-4">
        <div class="col-md-7">
            <div class="playlist-card p-4 border border-secondary shadow-lg">
                <h3 class="fw-bold text-white mb-3">Créer / Partager un Deck</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label text-white small fw-bold">Choisir une image / Cover</label>
                        <input type="file" id="inputImage" class="form-control bg-dark text-white border-secondary form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white small fw-bold">Lien vers une playlist</label>
                        <div class="input-group">
                            <input type="text" class="form-control bg-dark text-white border-secondary" placeholder="https://open.spotify.com/playlist/...">
                            <button class="btn btn-outline-warning text-white btn-sm px-3" type="button">Importer</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white small fw-bold">Titre de la playlist</label>
                        <input type="text" id="inputTitre" class="form-control bg-dark text-white border-secondary" value="Pnl mouhahaha les goats">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white small fw-bold">Tags (Cliquez pour activer/désactiver)</label>
                        <div class="d-flex gap-2 flex-wrap" id="containerTagsForm">
                            <span class="badge-tag border border-warning text-warning selectable-tag active" data-tag="PNL : 100%">PNL : 100%</span>
                            <span class="badge-tag border border-warning text-warning selectable-tag active" data-tag="292 titres">292 titres</span>
                            <span class="badge-tag border border-secondary selectable-tag" data-tag="Hip-Hop">Hip-Hop</span>
                            <span class="badge-tag border border-secondary selectable-tag" data-tag="R&B">R&B</span>
                            <span class="badge-tag border border-secondary selectable-tag" data-tag="French">French</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white small fw-bold">Description (Optionnelle)</label>
                        <textarea class="form-control bg-dark text-white border-secondary" rows="2" placeholder="Lorem Ipsum..."></textarea>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-5">
            <div class="playlist-card p-4 border border-secondary text-center shadow-lg">
                <h5 class="fw-bold text-white mb-3">Aperçu</h5>
                <div class="rounded-4 mb-3 overflow-hidden mx-auto" style="width: 180px; height: 180px; background-color: #1a2233; display: flex; align-items: center; justify-content: center;">
                    <img id="apercuImage" src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=600&auto=format&fit=crop&q=80" alt="Aperçu" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h5 id="apercuTitre" class="fw-bold text-white mb-1">Pnl mouhahaha les goats</h5>
                <p class="text-white small mb-3">Playlist créée par John Doe aujourd'hui</p>
                
                <!-- Zone des tags dynamiques dans l'aperçu -->
                <div class="d-flex justify-content-center gap-2 mb-3 flex-wrap" id="apercuTags">
                    <span class="badge-tag">PNL : 100%</span>
                    <span class="badge-tag">292 titres</span>
                </div>

                <div class="d-flex justify-content-center gap-2 mb-4">
                    <button class="btn btn-deckmix btn-sm px-4 text-dark">Ecouter</button>
                    <button class="btn btn-dark btn-sm px-4 text-white border border-secondary" style="border-radius: 20px;">Enregistrer</button>
                </div>
                <button class="btn btn-deckmix w-100 py-2 fw-bold text-dark">Publier votre playlist</button>
            </div>
        </div>
    </div>

    <!-- Script JavaScript pour le titre, l'image et les tags en direct -->
    <script>
        // Mise à jour du titre
        document.getElementById('inputTitre').addEventListener('input', function(e) {
            document.getElementById('apercuTitre').textContent = e.target.value || 'Nom de votre deck';
        });

        // Mise à jour de l'image
        document.getElementById('inputImage').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('apercuImage').src = event.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Gestion interactive des tags
        const tagsForm = document.querySelectorAll('.selectable-tag');
        tagsForm.forEach(tag => {
            tag.addEventListener('click', function() {
                this.classList.toggle('active');
                this.classList.toggle('border-warning');
                this.classList.toggle('text-warning');
                this.classList.toggle('border-secondary');
                
                reconstruireTagsApercu();
            });
        });

        function reconstruireTagsApercu() {
            const containerApercu = document.getElementById('apercuTags');
            containerApercu.innerHTML = '';
            
            document.querySelectorAll('.selectable-tag.active').forEach(activeTag => {
                const span = document.createElement('span');
                span.className = 'badge-tag';
                span.textContent = activeTag.getAttribute('data-tag');
                containerApercu.appendChild(span);
            });
        }
    </script>
<?php endif; ?>

<?php get_footer(); ?>