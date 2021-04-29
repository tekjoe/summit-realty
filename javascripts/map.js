$(document).ready(() => {
  const map = L.map("map", { scrollWheelZoom: false }).setView(
    [43.00402, -88.211873],
    15
  );

  L.tileLayer(
    "https://tile.thunderforest.com/atlas/{z}/{x}/{y}.png?apikey=3dcd7705a9eb46c2b8dc3137a60bc7a3"
  ).addTo(map);

  L.marker([43.00402, -88.211873])
    .addTo(map)
    .bindPopup(
      "<div style='text-align: center;'><p style='margin: 0;'>Summit Realty</p></div>"
    );
});
