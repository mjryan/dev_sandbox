export function fetchPhotoInfo() {

  const photoinfo = JSON.parse(localStorage.getItem('photoinfo'));

  buildGrid(photoinfo);
}

export function buildGrid(el) {
    // Build output
    let output = '<div class="row">';

    for (var i = 0; i < el.length; i++) {
      let
        id            = el[i].id,
        title         = el[i].title,
        url           = el[i].url,
        thumbnailUrl  = el[i].thumbnailUrl,
        description   = ''
        ;
      if ((i != 0) && (i % 5 == 0)) {
        output += `
          </div><div class="row">
          `;
      }

        output += `
          <div class="col-2 m-0 p-0" data-title="${title}" data-modal-image="${url}" data-id="${id}" data-desc="${description}" data-toggle="modal" data-target="#exampleModal" data-whatever="${title}">
              <img class="img-fluid img-thumbnail" src="${thumbnailUrl}" alt="" />
          </div>
            `;
        }
        output += '</div>'

      photos.innerHTML = output;
  }

  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var title = button.data('whatever')
    var modalimageURL = button.data('modal-image')
    var description = button.data('desc')
    var modal = $(this)
    modal.find('.modal-title').text(title)
    modal.find('.modal-image').attr('src', modalimageURL)
    // modal.find('#message-text').val(description)
    load_data();

  })



function save_data() {
    localStorage.setItem("server", this.value);
    console.log("Saving " + this.value);
}

function load_data() {
    var input = document.getElementById("message-text");
    input.value = localStorage.getItem("server");
    console.log("Loading " + input.value);
}




var input = document.getElementById("message-text");
input.onchange = save_data;
