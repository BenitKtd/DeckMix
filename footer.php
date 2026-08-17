<div class="bottom-player">
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-3 overflow-hidden" style="width: 45px; height: 45px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/tyler music.jpg" alt="Cover" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div>
                    <div style="font-size: 11px; color: var(--deck-orange); font-weight: 700;">• SPOTIFY STREAM</div>
                    <div style="font-size: 13px; font-weight: 600;">I Ain't Got Time!</div>
                    <div style="font-size: 11px; color: var(--deck-text-gray);">Tyler, The Creator - Flower Boy</div>
                </div>
            </div>

            <div class="d-flex flex-column align-items-center gap-1" style="width: 40%;">
                <div class="d-flex align-items-center gap-3">
                    <span class="text-muted" style="cursor:pointer; font-size: 14px;">🔀</span>
                    <span class="text-muted" style="cursor:pointer; font-size: 14px;">⏮</span>
                    <button class="btn btn-deckmix rounded-circle p-2 d-flex align-items-center justify-content:center" style="width: 32px; height: 32px;">⏸</button>
                    <span class="text-muted" style="cursor:pointer; font-size: 14px;">⏭</span>
                    <span class="text-muted" style="cursor:pointer; font-size: 14px;">🔁</span>
                </div>
                <div class="d-flex align-items-center gap-2 w-100">
                    <span style="font-size: 10px; color: var(--deck-text-gray);">1:12</span>
                    <div class="flex-grow-1 bg-secondary rounded-pill" style="height: 4px;">
                        <div class="bg-warning rounded-pill" style="width: 35%; height: 100%;"></div>
                    </div>
                    <span style="font-size: 10px; color: var(--deck-text-gray);">3:26</span>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3 text-muted">
                <span style="cursor:pointer;">➕</span>
                <span style="cursor:pointer;">🔊</span>
                <div class="bg-secondary rounded-pill" style="width: 80px; height: 4px;">
                    <div class="bg-white rounded-pill" style="width: 70%; height: 100%;"></div>
                </div>
            </div>
        </div>

        <!-- Modal Connexion -->
        <div class="modal fade" id="loginModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark border border-secondary text-white p-4 rounded-4">
                    <h3 class="fw-bold mb-3">Connexion à DeckMix</h3>
                    <form onsubmit="connecterUtilisateur(event)">
                        <div class="mb-3">
                            <label class="form-label text-white small">Nom d'utilisateur ou Email</label>
                            <input type="text" class="form-control bg-secondary text-white border-0" value="JohnDoe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white small">Mot de passe</label>
                            <input type="password" class="form-control bg-secondary text-white border-0" value="password">
                        </div>
                        <button type="submit" class="btn btn-deckmix w-100 py-2 mt-2">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Inscription -->
        <div class="modal fade" id="registerModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark border border-secondary text-white p-4 rounded-4">
                    <h3 class="fw-bold mb-3">Créer un compte DeckMix</h3>
                    <form onsubmit="connecterUtilisateur(event)">
                        <div class="mb-3">
                            <label class="form-label text-white small">Nom d'utilisateur</label>
                            <input type="text" class="form-control bg-secondary text-white border-0" placeholder="@Pseudo" value="@JohnDoe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white small">Adresse email</label>
                            <input type="email" class="form-control bg-secondary text-white border-0" placeholder="nom@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white small">Mot de passe</label>
                            <input type="password" class="form-control bg-secondary text-white border-0" placeholder="••••••••" value="password">
                        </div>
                        <button type="submit" class="btn btn-deckmix w-100 py-2 mt-2">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Créer un poste -->
        <div class="modal fade" id="createPostModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark border border-secondary text-white p-4 rounded-4">
                    <h3 class="fw-bold mb-3">Créer une discussion / requête</h3>
                    <form onsubmit="event.preventDefault(); bootstrap.Modal.getInstance(document.getElementById('createPostModal')).hide(); alert('Poste créé avec succès !');">
                        <div class="mb-3">
                            <label class="form-label text-white small">Type de publication</label>
                            <select class="form-control bg-secondary text-white border-0">
                                <option>Requête</option>
                                <option>Discussion</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white small">Titre du sujet</label>
                            <input type="text" class="form-control bg-secondary text-white border-0" placeholder="De quoi souhaitez-vous parler ?">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white small">Message</label>
                            <textarea class="form-control bg-secondary text-white border-0" rows="4" placeholder="Votre message..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-deckmix w-100 py-2 mt-2">Publier sur le forum</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Script de Connexion JS -->
    <script>
        function connecterUtilisateur(event) {
            event.preventDefault();
            document.cookie = "deckmix_auth=1; path=/; max-age=3600";
            window.location.reload();
        }
    </script>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>