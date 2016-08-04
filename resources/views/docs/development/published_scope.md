# Published Global Scope

## Usage

#### active (live)
    App\Model::all()

    select * "news_items"
        where ("news_items"."published" = true and "news_items"."published_since" <= :NOW)
            and "news_items"."deleted_at" is null

#### active + pending
    App\Model::withPending()->get()

    select * "news_items" 
        where "news_items"."published" = true
            and "news_items"."deleted_at" is null

####active + revoked
    App\Model::withRevoked()->get()

    select * from "news_items"
        where "news_items"."published_since" <= :NOW
            and "news_items"."deleted_at" is null

####active + pending + revoked (bad)
    App\Model::withPending()->withRevoked()->get()

    select * from "news_items"
        where "news_items"."published" = true
            and "news_items"."published_since" <= :NOW
                and "news_items"."deleted_at" is null

####active + pending + revoked (solution)
    App\Model::withoutGlobalScope(App\Model::getScopeObject())->get()

####pending
    App\Model::onlyPending()->get()

    select * from "news_items"
        where ("news_items"."published" = true and "news_items"."published_since" > :NOW)
            and "news_items"."deleted_at" is null

####revoked
    App\Model::onlyRevoked()->get()

    select * from "news_items"
        where "news_items"."published" = false
            and "news_items"."deleted_at" is null

####pending + revoked (bad)
    App\Model::onlyPending()->onlyRevoked()->get()

    select * from "news_items"
        where ("news_items"."published" = true and "news_items"."published_since" > :NOW)
            and "news_items"."published" = false
                and "news_items"."deleted_at" is null

####pending + revoked = inactive (solution)

    App\Model::onlyInactive()->get()

    select * from "news_items"
        where ("news_items"."published" = false or "news_items"."published_since" > :NOW)
            and "news_items"."deleted_at" is null

