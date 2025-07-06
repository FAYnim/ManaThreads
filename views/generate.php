<!-- views/generate.php -->

<h2>Generator Konten AI</h2>
<p>Buat konten Threads secara otomatis dengan menentukan topik, model, dan kreativitas AI.</p>

<form id="form-generate-konten" class="form-container">
    <div class="form-group">
        <label for="topik">Topik Bahasan</label>
        <input type="text" id="topik" name="topik" placeholder="Contoh: Keunggulan iPhone 15 Pro Max">
    </div>

    <div class="form-group">
        <label for="model">Pilih Model Konten</label>
        <select id="model" name="model">
            <option value="edukatif">Edukasi</option>
            <option value="lucu">Lucu / Menghibur</option>
            <option value="inspiratif">Inspiratif</option>
            <option value="storytelling">Storytelling</option>
            <option value="teknikal">Teknikal</option>
        </select>
    </div>

    <div class="form-group">
        <label for="temperatur">Tingkat Kreativitas (Temperatur): <span id="temp-value">0.7</span></label>
        <input type="range" id="temperatur" name="temperatur" min="0.1" max="1.0" step="0.1" value="0.7">
    </div>
    
    <button type="submit">🚀 Generate Konten</button>
</form>

<div id="hasil-generate" class="results-container">
    <label>Hasil Konten:</label>
    <textarea id="output-konten" rows="10" placeholder="Konten yang dihasilkan AI akan muncul di sini..."></textarea>
    <div class="output-actions">
        <button id="btn-simpan-draft">Simpan ke Draft</button>
        <button id="btn-salin-teks">Salin Teks</button>
    </div>
</div>
