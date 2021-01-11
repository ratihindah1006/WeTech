<br><br><br>
    
    <div class="container"  >

    <div class="col-md-6" >
    <div class="card bg-warning" >
    

              <div align ="center"></br></br></br>
                <h3 >Edit Movie</h3>
              </div> </br></br></br>
              <form action ="<?= base_url('movie/updateMovie/'.$movie['movie_id']);?>" method="post"  >
              
                <div class="card-body" >

                <div class="form-group">
                  <label>Img : </label>
                    <input name="img" type="file" class="form-control" value="<?= $movie['img']?>">
                  </div>
             
                  <div class="form-group">
                  <label>Title : </label>
                    <input name="title" type="text" class="form-control" value="<?= $movie['title']?>" >
                  </div>
                  
                  <div class="form-group">
                  <label>Genre : </label>
                    <input name="genre" type="text" class="form-control" value="<?= $movie['genre']?>" >
                  </div>

                  <div class="form-group">
                  <label>Duration : </label>
                    <input name="duration" type="time" class="form-control" value="<?= $movie['duration']?>">
                  </div>

                  <div class="form-group">
                  <label>Released at : </label>
                    <input name="released_at" type="date" class="form-control" value="<?= $movie['released_at']?>" >
                  </div>

                  <div class="form-group">
                  <label>Producer : </label>
                    <input name="producer" type="text" class="form-control" value="<?= $movie['producer']?>">
                  </div>

                  <div class="form-group">
                  <label>Sutradara : </label>
                    <input name="sutradara" type="text" class="form-control" value="<?= $movie['sutradara']?>" >
                  </div>

                  <div class="form-group">
                  <label>Cast : </label>
                    <input name="cast" type="text" class="form-control" value="<?= $movie['cast']?>">
                  </div>

                  <div class="form-group">
                  <label>Sinopsis : </label>
                    <input name="sinopsis" type="text" class="form-control" value="<?= $movie['sinopsis']?>" >
                  </div>

                  <div class="form-group">
                  <label>Is Active : </label>
                    <input name="is_active" type="number" class="form-control" value="<?= $movie['is_active']?>" >
                  </div>
                  
                  
                </div> </br></br></br>
                <!-- /.card-body -->

                <div class="card-footer" align="center">
                <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form> </br></br></br>

              
              
              
            






