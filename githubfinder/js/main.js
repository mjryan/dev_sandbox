$(document).ready(function(){
  $('#searchUser').on('keyup', function(e) {
    let username = e.target.value;


    // Make request to Github
    $.ajax({
      url:'https://api.github.com/users/'+username,
      data:{
        client_id:'47c33bb83ebbc29209fa',
        client_secret:'770fe61b8357735342d63d11eab05c309c4b4247'
      }
    }).done(function(user){
      $.ajax({
        url:'https://api.github.com/users/'+username+'/repos',
        data:{
          client_id:'47c33bb83ebbc29209fa',
          client_secret:'770fe61b8357735342d63d11eab05c309c4b4247',
          sort: 'created_at: asc',
          per_page: '5'
        }
      }).done(function(repos){
        // console.log(repos);
        $.each(repos, function(index, repo){
          $('#repos').append(`
            <div class="card text-white bg-info p-3 mb-4 mt-0">
              <div class="row">
                <div class="col-md-7">
                  <strong>${repo.name}</strong>: ${repo.description}
                </div>
                <div class="col-md-3">
                <span class="badge badge-primary">Forks: ${repo.forks_count}</span>
                <span class="badge badge-secondary">Watchers: ${repo.watchers_count}</span>
                <span class="badge badge-success">Stars: ${repo.stargazers_count}</span>
                </div>
                <div class="col-md-2">
                  <a href="${repo.html_url}" target="_blank" class="btn btn-info">Repo Page</a>
                </div>
              </div>
            </div>
            `);
        });
      });
      $('#profile').html(`
        <div class="card text-white bg-info mb-5">
          <div class="card-header">${user.name}</div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img class="img-thumbnail avatar mb-2" src="${user.avatar_url}">
                <a target="_blank" class="btn btn-info btn-block" href="${user.html_url}">View Profile</a>
              </div>
              <div class="col-md-9">
                <span class="badge badge-primary">Public Repos: ${user.public_repos}</span>
                <span class="badge badge-secondary">Public Gists: ${user.public_gists}</span>
                <span class="badge badge-success">Followers: ${user.followers}</span>
                <span class="badge badge-danger">Following: ${user.following}</span>
                <br><br>
                <ul class="list-group">
                  <li class="list-group-item list-group-item-info">Company: ${user.company}</li>
                  <li class="list-group-item list-group-item-info">Website/blog: ${user.blog}</li>
                  <li class="list-group-item list-group-item-info">Location: ${user.location}</li>
                  <li class="list-group-item list-group-item-info">Member Since: ${user.created_at}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3 class="border border-top-0 border-right-0 border-left-0 text-white mb-2 pb-2">Latest Repos</h3>
        <div id="repos"></div>
        `);
    });
  });
});
