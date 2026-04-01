<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<style>
    #three-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        z-index: -1;

    }
</style>

<body>
    <div id="three-bg"></div>
</body>
<script src="https://cdn.jsdelivr.net/npm/three@0.158.0/build/three.min.js"></script>
<script>
    // Scene
    const scene = new THREE.Scene();

    // Camera
    const camera = new THREE.PerspectiveCamera(
        75,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
    );
    camera.position.z = 3;

    // Renderer
    const renderer = new THREE.WebGLRenderer({
        antialias: true,
        alpha: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.getElementById("three-bg").appendChild(renderer.domElement);

    // Geometry (Sphere)
    const geometry = new THREE.SphereGeometry(1, 64, 64);

    // Material (Glow-like gold effect)
    const material = new THREE.MeshStandardMaterial({
        color: 0x0a6efd,
        emissive: 0x0a6efd,
        emissiveIntensity: 0.5,
        wireframe: true
    });

    const sphere = new THREE.Mesh(geometry, material);
    scene.add(sphere);

    // Light
    const light = new THREE.PointLight(0xffffff, 1);
    light.position.set(5, 5, 5);
    scene.add(light);

    // Animation
    function animate() {
        requestAnimationFrame(animate);

        sphere.rotation.y += 0.003;
        sphere.rotation.x += 0.001;

        renderer.render(scene, camera);
    }

    animate();

    // Responsive
    window.addEventListener("resize", () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
</script>
</html>