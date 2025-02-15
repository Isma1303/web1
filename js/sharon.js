
  // Event listener for the 'Cursos libres avanzados' card
  document.getElementById('cursos-libres').addEventListener('click', () => {
    showAlertCursosLibres();
  });

  document.getElementById('Programas').addEventListener('click', () => {
    showAlertProgramas();
  });

  document.getElementById('Pregrados').addEventListener('click', () => {
    showAlertPregrados();
  });
  
  document.getElementById('Posgrados').addEventListener('click', () => {
    showAlertPosgrados();
  });

  // Function to show the alert
  function showAlertCursosLibres() {
    Swal.fire({
      title: 'Cursos libres disponibles',
      text: '¿Quieres ver cuales son los cursos que tenemos disponibles?',
      icon: 'info',
      confirmButtonText: 'Continuar',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      iconHtml: '<i class="bi bi-backpack3"></i>'
    }).then((result) => {
      if (result.isConfirmed) {
        alert("Mindfulness\nNeurociencia aplicada a transtornos psiquiátricos\nPsicofarmacología aplicada");
    } else {
        alert("Ha decidido cancelar la busqueda");
      }
    });
  }

  function showAlertProgramas() {
    Swal.fire({
      title: 'Programas disponibles',
      text: '¿Quieres ver cuales son los programas que tenemos disponibles?',
      icon: 'info',
      confirmButtonText: 'Continuar',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      iconHtml: '<i class="bi bi-backpack3"></i>'
    }).then((result) => {
      if (result.isConfirmed) {
        alert("Actualización y Acreditación Ministerial\nActualización y acreditación Gerencial");
    } else {
        alert("Ha decidido cancelar la busqueda");
      }
    });
  }

  function showAlertPregrados() {
    Swal.fire({
      title: 'Licenciaturas disponibles',
      text: '¿Quieres ver cuales son las licenciaturas que tenemos disponibles?',
      icon: 'info',
      confirmButtonText: 'Continuar',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      iconHtml: '<i class="bi bi-backpack3"></i>'
    }).then((result) => {
      if (result.isConfirmed) {
        alert("Ingeniería Sistemas y Ciencias de la Computación\nIngeniería Tecnología Industrial\nIngeniería Agronómica");
    } else {
        alert("Ha decidido cancelar la busqueda");
      }
    });
  }
  
  
  function showAlertPosgrados() {
    Swal.fire({
      title: 'Maestrías disponibles',
      text: '¿Quieres ver cuales son las maestrías que tenemos disponibles?',
      icon: 'info',
      confirmButtonText: 'Continuar',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      iconHtml: '<i class="bi bi-backpack3"></i>'
    }).then((result) => {
      if (result.isConfirmed) {
        alert("Liderazgo Organizacional\nBusiness Administration\nArtoplastia de Rodilla y Cadera");
      } else {
        alert("Ha decidido cancelar la busqueda");
      }
    });
  }