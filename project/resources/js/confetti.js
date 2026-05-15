function burst(originEl) {
    const canvas = document.createElement('canvas');
    Object.assign(canvas.style, {
        position: 'fixed', inset: 0,
        width: '100vw', height: '100vh',
        pointerEvents: 'none', zIndex: 9999,
    });
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    document.body.appendChild(canvas);

    const ctx = canvas.getContext('2d');
    const rect = originEl.getBoundingClientRect();
    const ox = rect.left + rect.width / 2;
    const oy = rect.top + rect.height / 1.5;
    const colors = ['#f94144', '#f3722c', '#90be6d', '#43aa8b', '#577590', '#f9c74f'];

    const particles = Array.from({ length: 80 }, () => ({
        x: ox, y: oy,
        vx: (Math.random() - 0.5) * 24,
        vy: Math.random() * -14 - 3,
        color: colors[Math.floor(Math.random() * colors.length)],
        size: Math.random() * 8 + 5,
        rotation: Math.random() * Math.PI * 2,
        spin: (Math.random() - 0.5) * 0.3,
        life: 1,
    }));

    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        let alive = false;

        for (const p of particles) {
            p.x += p.vx;
            p.y += p.vy;
            p.vy += 0.4;         // gravity
            p.vx *= 0.98;        // drag
            p.rotation += p.spin;
            p.life -= 0.018;
            if (p.life <= 0) continue;
            alive = true;

            ctx.save();
            ctx.globalAlpha = p.life;
            ctx.translate(p.x, p.y);
            ctx.rotate(p.rotation);
            ctx.fillStyle = p.color;
            ctx.fillRect(-p.size / 2, -p.size / 2, p.size, p.size * 0.5);
            ctx.restore();
        }

        alive ? requestAnimationFrame(draw) : canvas.remove();
    }

    draw();
}

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('summon-btn');
    if (!btn) return;
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        const img = document.getElementById('cat-img');
        burst(img || btn);
        setTimeout(() => { window.location.href = btn.href; }, 600);
    });
});