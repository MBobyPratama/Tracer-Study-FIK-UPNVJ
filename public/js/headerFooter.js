class SpecialHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <header>
    <img class="logo" src="images/logo-fik.png">
    <nav class="navbar">
      <a href="/home">Beranda</a>
      <a href="/about-us">Tentang Kami</a>
      
      <div class="menu-item">
        <a href="#">Alumni ▾</a>
        <div class="dropdown">
          <a href="/tracer-study">Tracer Study FIK UPNVJ</a>
        </div>
      </div>

      <div class="menu-item">
        <a href="#">Event ▾</a>
        <div class="dropdown">
          <a href="/career-class">Career Class</a>
          <a href="/company-talk">Company Talk</a>
          <a href="/career-fair">Career Fair</a>
        </div>
      </div>

      <a href="/login" class="btn-login-link">
        <button class="btn-login">Login Alumni</button>
      </a>
    </nav>
  </header>
    `;
  }
}

class SpecialFooter extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <footer>
    <div class="container">
      <img class="logo-upn" src="images/logo-fik.png">
      <h1>FIK - UPNVJ</h1>
      <div class="contact-info">
        <div class="contact-item">
          <i class="fa-solid fa-map-location-dot"></i>
          <p>Jl. RS. Fatmawati, Pondok Labu, Jakarta Selatan, 12450</p>
        </div>
        <div class="contact-item">
          <i class="fa-solid fa-envelope"></i>
          <a href="tel:+62217656971">(021)7656971</a>
        </div>
        <div class="contact-item">
          <i class="fa-solid fa-phone"></i>
          <a href="mailto:upnvj@upnvj.ac.id">upnvj@upnvj.ac.id</a>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      Copyright ©2024 Fakultas Ilmu Komputer UPN Veteran Jakarta<br>
    </div>
  </footer>
    `;
  }
}

customElements.define("special-header", SpecialHeader);
customElements.define("special-footer", SpecialFooter);
