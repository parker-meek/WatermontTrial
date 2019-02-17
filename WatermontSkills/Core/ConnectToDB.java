import com.mongodb.client.MongoDatabase;
import com.mongodb.MongoClient;
import com.mongodb.MongoCredential;

public class ConnectToDB {

    public static void main( String args[] ) {

        MongoClientUri uri = new MongoClientUri("mongodb://Parker-Meek:<PASSWORD>@watermontapp-shard-00-00-hmd8t.mongodb.net:27017,watermontapp-shard-00-01-hmd8t.mongodb.net:27017,watermontapp-shard-00-02-hmd8t.mongodb.net:27017/test?ssl=true&replicaSet=WatermontApp-shard-0&authSource=admin&retryWrites=true")

        // Creating a Mongo client
        MongoClient mongo = new MongoClient( uri , 27017 );

        // Creating Credentials
        MongoCredential credential;
        credential = MongoCredential.createCredential("Parker.Meek", "Watermont",
                "penguin".toCharArray());
        System.out.println("Connected to the database successfully");

        // Accessing the database
        MongoDatabase database = mongo.getDatabase("Watermont");
        System.out.println("Credentials ::"+ credential);
    }
}