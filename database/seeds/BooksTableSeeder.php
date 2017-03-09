<?php
use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('books')->delete();
        Book::create(['title' => 'ULYSSES', 'author' => 'James Joyce']);
        Book::create(['title' => 'THE GREAT GATSBY', 'author' => 'F. Scott Fitzgerald']);
        Book::create(['title' => 'A PORTRAIT OF THE ARTIST AS A YOUNG MAN', 'author' => 'James Joyce']);
        Book::create(['title' => 'LOLITA', 'author' => 'Vladimir Nabokov']);
        Book::create(['title' => 'BRAVE NEW WORLD', 'author' => 'Aldous Huxley']);
        Book::create(['title' => 'THE SOUND AND THE FURY', 'author' => 'William Faulkner']);
        Book::create(['title' => 'CATCH-22', 'author' => 'Joseph Heller']);
        Book::create(['title' => 'DARKNESS AT NOON', 'author' => 'Arthur Koestler']);
        Book::create(['title' => 'SONS AND LOVERS', 'author' => 'D.H. Lawrence']);
        Book::create(['title' => 'THE GRAPES OF WRATH', 'author' => 'John Steinbeck']);
        Book::create(['title' => 'UNDER THE VOLCANO', 'author' => 'Malcolm Lowry']);
        Book::create(['title' => 'THE WAY OF ALL FLESH', 'author' => 'Samuel Butler']);
        Book::create(['title' => '1984', 'author' => 'George Orwell']);
        Book::create(['title' => 'I, CLAUDIUS', 'author' => 'Robert Graves']);
        Book::create(['title' => 'TO THE LIGHTHOUSE', 'author' => 'Virginia Woolf']);
        Book::create(['title' => 'AN AMERICAN TRAGEDY', 'author' => 'Theodore Dreiser']);
        Book::create(['title' => 'THE HEART IS A LONELY HUNTER', 'author' => 'Carson McCullers']);
        Book::create(['title' => 'SLAUGHTERHOUSE-FIVE', 'author' => 'Kurt Vonnegut']);
        Book::create(['title' => 'INVISIBLE MAN', 'author' => 'Ralph Ellison']);
        Book::create(['title' => 'NATIVE SON', 'author' => 'Richard Wright']);
        Book::create(['title' => 'HENDERSON THE RAIN KING', 'author' => 'Saul Bellow']);
        Book::create(['title' => 'APPOINTMENT IN SAMARRA', 'author' => 'John O’Hara']);
        Book::create(['title' => 'U.S.A.(trilogy)', 'author' => 'John Dos Passos']);
        Book::create(['title' => 'WINESBURG, OHIO', 'author' => 'Sherwood Anderson']);
        Book::create(['title' => 'A PASSAGE TO INDIA', 'author' => 'E.M. Forster']);
        Book::create(['title' => 'THE WINGS OF THE DOVE', 'author' => 'Henry James']);
        Book::create(['title' => 'THE AMBASSADORS', 'author' => 'Henry James']);
        Book::create(['title' => 'TENDER IS THE NIGHT', 'author' => 'F. Scott Fitzgerald']);
        Book::create(['title' => 'THE STUDS LONIGAN TRILOGY', 'author' => 'James T. Farrell']);
        Book::create(['title' => 'THE GOOD SOLDIER', 'author' => 'Ford Madox Ford']);
        Book::create(['title' => 'ANIMAL FARM', 'author' => 'George Orwell']);
        Book::create(['title' => 'THE GOLDEN BOWL', 'author' => 'Henry James']);
        Book::create(['title' => 'SISTER CARRIE', 'author' => 'Theodore Dreiser']);
        Book::create(['title' => 'A HANDFUL OF DUST', 'author' => 'Evelyn Waugh']);
        Book::create(['title' => 'AS I LAY DYING', 'author' => 'William Faulkner']);
        Book::create(['title' => 'ALL THE KING’S MEN', 'author' => 'Robert Penn Warren']);
        Book::create(['title' => 'THE BRIDGE OF SAN LUIS REY', 'author' => 'Thornton Wilder']);
        Book::create(['title' => 'HOWARDS END', 'author' => 'E.M. Forster']);
        Book::create(['title' => 'GO TELL IT ON THE MOUNTAIN', 'author' => 'James Baldwin']);
        Book::create(['title' => 'THE HEART OF THE MATTER', 'author' => 'Graham Greene']);
        Book::create(['title' => 'LORD OF THE FLIES', 'author' => 'William Golding']);
        Book::create(['title' => 'DELIVERANCE', 'author' => 'James Dickey']);
        Book::create(['title' => 'A DANCE TO THE MUSIC OF TIME (series)', 'author' => 'Anthony Powell']);
        Book::create(['title' => 'POINT COUNTER POINT', 'author' => 'Aldous Huxley']);
        Book::create(['title' => 'THE SUN ALSO RISES', 'author' => 'Ernest Hemingway']);
        Book::create(['title' => 'THE SECRET AGENT', 'author' => 'Joseph Conrad']);
        Book::create(['title' => 'NOSTROMO', 'author' => 'Joseph Conrad']);
        Book::create(['title' => 'THE RAINBOW', 'author' => 'D.H. Lawrence']);
        Book::create(['title' => 'WOMEN IN LOVE', 'author' => 'D.H. Lawrence']);
        Book::create(['title' => 'TROPIC OF CANCER', 'author' => 'Henry Miller']);
        Book::create(['title' => 'THE NAKED AND THE DEAD', 'author' => 'Norman Mailer']);
        Book::create(['title' => 'PORTNOY’S COMPLAINT', 'author' => 'Philip Roth']);
        Book::create(['title' => 'PALE FIRE', 'author' => 'Vladimir Nabokov']);
        Book::create(['title' => 'LIGHT IN AUGUST', 'author' => 'William Faulkner']);
        Book::create(['title' => 'ON THE ROAD', 'author' => 'Jack Kerouac']);
        Book::create(['title' => 'THE MALTESE FALCON', 'author' => 'Dashiell Hammett']);
        Book::create(['title' => 'PARADE’S END', 'author' => 'Ford Madox Ford']);
        Book::create(['title' => 'THE AGE OF INNOCENCE', 'author' => 'Edith Wharton']);
        Book::create(['title' => 'ZULEIKA DOBSON', 'author' => 'Max Beerbohm']);
        Book::create(['title' => 'THE MOVIEGOER', 'author' => 'Walker Percy']);
        Book::create(['title' => 'DEATH COMES FOR THE ARCHBISHOP', 'author' => 'Willa Cather']);
        Book::create(['title' => 'FROM HERE TO ETERNITY', 'author' => 'James Jones']);
        Book::create(['title' => 'THE WAPSHOT CHRONICLES', 'author' => 'John Cheever']);
        Book::create(['title' => 'THE CATCHER IN THE RYE', 'author' => 'J.D. Salinger']);
        Book::create(['title' => 'A CLOCKWORK ORANGE', 'author' => 'Anthony Burgess']);
        Book::create(['title' => 'OF HUMAN BONDAGE', 'author' => 'W. Somerset Maugham']);
        Book::create(['title' => 'HEART OF DARKNESS', 'author' => 'Joseph Conrad']);
        Book::create(['title' => 'MAIN STREET', 'author' => 'Sinclair Lewis']);
        Book::create(['title' => 'THE HOUSE OF MIRTH', 'author' => 'Edith Wharton']);
        Book::create(['title' => 'THE ALEXANDRIA QUARTET', 'author' => 'Lawrence Durell']);
        Book::create(['title' => 'A HIGH WIND IN JAMAICA', 'author' => 'Richard Hughes']);
        Book::create(['title' => 'A HOUSE FOR MR BISWAS', 'author' => 'V.S. Naipaul']);
        Book::create(['title' => 'THE DAY OF THE LOCUST', 'author' => 'Nathanael West']);
        Book::create(['title' => 'A FAREWELL TO ARMS', 'author' => 'Ernest Hemingway']);
        Book::create(['title' => 'SCOOP', 'author' => 'Evelyn Waugh']);
        Book::create(['title' => 'THE PRIME OF MISS JEAN BRODIE', 'author' => 'Muriel Spark']);
        Book::create(['title' => 'FINNEGANS WAKE', 'author' => 'James Joyce']);
        Book::create(['title' => 'KIM', 'author' => 'Rudyard Kipling']);
        Book::create(['title' => 'A ROOM WITH A VIEW', 'author' => 'E.M. Forster']);
        Book::create(['title' => 'BRIDESHEAD REVISITED', 'author' => 'Evelyn Waugh']);
        Book::create(['title' => 'THE ADVENTURES OF AUGIE MARCH', 'author' => 'Saul Bellow']);
        Book::create(['title' => 'ANGLE OF REPOSE', 'author' => 'Wallace Stegner']);
        Book::create(['title' => 'A BEND IN THE RIVER', 'author' => 'V.S. Naipaul']);
        Book::create(['title' => 'THE DEATH OF THE HEART', 'author' => 'Elizabeth Bowen']);
        Book::create(['title' => 'LORD JIM', 'author' => 'Joseph Conrad']);
        Book::create(['title' => 'RAGTIME', 'author' => 'E.L. Doctorow']);
        Book::create(['title' => 'THE OLD WIVES’ TALE', 'author' => 'Arnold Bennett']);
        Book::create(['title' => 'THE CALL OF THE WILD', 'author' => 'Jack London']);
        Book::create(['title' => 'LOVING', 'author' => 'Henry Green']);
        Book::create(['title' => 'MIDNIGHT’S CHILDREN', 'author' => 'Salman Rushdie']);
        Book::create(['title' => 'TOBACCO ROAD', 'author' => 'Erskine Caldwell']);
        Book::create(['title' => 'IRONWEED', 'author' => 'William Kennedy']);
        Book::create(['title' => 'THE MAGUS', 'author' => 'John Fowles']);
        Book::create(['title' => 'WIDE SARGASSO SEA', 'author' => 'Jean Rhys']);
        Book::create(['title' => 'UNDER THE NET', 'author' => 'Iris Murdoch']);
        Book::create(['title' => 'SOPHIE’S CHOICE', 'author' => 'William Styron']);
        Book::create(['title' => 'THE SHELTERING SKY', 'author' => 'Paul Bowles']);
        Book::create(['title' => 'THE POSTMAN ALWAYS RINGS TWICE', 'author' => 'James M. Cain']);
        Book::create(['title' => 'THE GINGER MAN', 'author' => 'J.P. Donleavy']);
        Book::create(['title' => 'THE MAGNIFICENT AMBERSONS', 'author' => 'Booth Tarkington']);
    }

}