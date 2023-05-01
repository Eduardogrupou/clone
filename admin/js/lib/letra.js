function handler(e) {
  const nome = $("#" + e).text().trim();

  const firstInitial = nome.charAt(0).toUpperCase();
  let secondInitial = "";
  const spaceIndex = nome.indexOf(" ");
  if (spaceIndex !== -1 && spaceIndex < nome.length - 1) {
    secondInitial = nome.charAt(spaceIndex + 1).toUpperCase();
  }

  return firstInitial + secondInitial;
}
