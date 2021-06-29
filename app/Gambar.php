  <?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Gambar extends Model
{
    protected $table = "pegawai2";
 
    protected $fillable = ['nip','nama','alamat','file'];
}
// public function user()
//     {
//         return $this->belongsTo(User::class, 'user_id');
//     }
//