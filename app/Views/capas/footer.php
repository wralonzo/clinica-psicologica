</div>

</div>
</div>
<script>
function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("bg-white");
    document.getElementById(collapseID).classList.toggle("m-2");
    document.getElementById(collapseID).classList.toggle("py-3");
    document.getElementById(collapseID).classList.toggle("px-6");
  }

  function toggleNavbarAMnueg(collapseID) {
    document.getElementById(collapseID).classList.toggle("md:hidden");
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("bg-white");
    document.getElementById(collapseID).classList.toggle("m-1");
    document.getElementById(collapseID).classList.toggle("py-1");
    document.getElementById(collapseID).classList.toggle("px-1");

    document.getElementById('amburguerMain').classList.remove("md:ml-64");
    document.getElementById('btnOpen').classList.remove("hidden");
  }

  function toggleNavbarAMnuegOpen(collapseID) {
    document.getElementById(collapseID).classList.remove("md:hidden");
    document.getElementById(collapseID).classList.remove("hidden");
    document.getElementById(collapseID).classList.remove("bg-white");
    document.getElementById(collapseID).classList.remove("m-1");
    document.getElementById(collapseID).classList.remove("py-1");
    document.getElementById(collapseID).classList.remove("px-1");

    document.getElementById('amburguerMain').classList.add("md:ml-64");
    document.getElementById('btnOpen').classList.remove("hidden");
  }
  /* Function for dropdowns */
  function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
      element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
      placement: "bottom-start"
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
  }
</script>
<script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>
</body>

</html>