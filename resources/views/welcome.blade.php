<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://github.com/ngokevin/aframe-physics-components/blob/master/dist/aframe-physics-components.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
            <a-scene inspector="url: https://cdn.jsdelivr.net/gh/aframevr/aframe-inspector@master/dist/aframe-inspector.min.js" debug physics-world="gravity: 0 -9.8 0">
                <a-camera position="3.3 2 0">
                        <a-entity cursor="fuse: true; fuseTimeout: 500"
            position="0 0 -1"
            geometry="primitive: ring; radiusInner: 0.02; radiusOuter: 0.03"
            material="color: red; shader: flat">
  </a-entity>
                </a-camera>
                <a-asset-item id="mesa" src="{{ asset('resources/mesa.obj') }}"></a-asset-item>
                <a-asset-item id="mesa-mtl" src="{{ asset('resources/mesa.mtl') }}"></a-asset-item>
                <a-asset-item id="inventory" src="{{ asset('resources/inventory.obj') }}"></a-asset-item>
                <a-asset-item id="inventory-mtl" src="{{ asset('resources/inventory.mtl') }}"></a-asset-item>
                <a-asset-item id="recycle" src="{{ asset('resources/recycle.obj') }}"></a-asset-item>
                <a-asset-item id="recycle-mtl" src="{{ asset('resources/recycle.mtl') }}"></a-asset-item>
                <a-entity obj-model="obj: #mesa; mtl: #mesa-mtl" scale="0.3 0.3 0.3" position="4 0 0"></a-entity>
                <a-entity obj-model="obj:#recycle; mtl:#recycle-mtl" scale="1.2 1.2 1.2" position="2.854 0 1.874" rotation="180 90 180"></a-entity>
                <a-entity click-drag obj-model="obj: #inventory; mtl: #inventory-mtl" scale="0.005 0.005 0.005" position="3 0 -2" rotation="0 90 0"></a-entity>
                <a-entity light="type: spot; intensity: 1; angle:90" position="4 2.391 -1.180" rotation="0 -190 0"></a-entity>
                <a-entity light="type: spot; intensity: 1; angle:90" position="4.532 2.926 1.060" rotation="0 360 0"></a-entity>
                <a-assets>
                  <img id="skyTexture" src="{{ asset('resources/background.jpg') }}">
                </a-assets>
                <a-sky src="#skyTexture"></a-sky>
                <a-sphere cursor-listener click-drag radius="1.25" dynamic-body="mass: 20" color="#EF2D5E"></a-sphere>
              </a-scene>
    </body>
</html>
