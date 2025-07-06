<!-- views/ide.php -->

<h2>Cari Ide Konten</h2>
<p>Bingung mau posting apa? Biarkan AI membantu Anda mencari ide segar berdasarkan niche atau bio Anda.</p>

<form id="form-cari-ide" class="form-container">
    <div class="form-group">
        <label for="niche">Niche / Topik Utama</label>
        <input type="text" id="niche" name="niche" placeholder="Contoh: Teknologi, Memasak, Gaming">
    </div>
    <div class="form-group">
        <label for="bio">Bio Akun Anda (Opsional)</label>
        <textarea id="bio" name="bio" rows="3" placeholder="Contoh: Tech enthusiast yang suka berbagi tips seputar gadget."></textarea>
    </div>
    <button type="submit">✨ Cari Ide!</button>
</form>

<div id="hasil-ide" class="results-container">
    <!-- Hasil pencarian ide dari AI akan muncul di sini -->
    <p class="placeholder">Hasil ide akan ditampilkan di sini setelah Anda menekan tombol "Cari Ide".</p>
</div>
