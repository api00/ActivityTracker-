package com.repository;

import com.domain.Blog;
import com.domain.Goal;
import com.domain.TaxUser;
import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class GoalRepoImple implements GoalRepo {

    private SessionFactory sessionFactory;

    public GoalRepoImple(SessionFactory sessionFactory) {
        this.sessionFactory = sessionFactory;
    }

    public List<Goal> getAll() {
        Session session = sessionFactory.getCurrentSession();
        Query<Goal> user = session.createQuery("from Goal", Goal.class);
        return user.getResultList();
    }

    public Goal create(Goal goal) {
        Session session = sessionFactory.getCurrentSession();
        session.save(goal);

        return goal;
    }

    public Goal get(int id) {
        Session session = sessionFactory.getCurrentSession();
        return session.get(Goal.class, id);
    }

    public Goal update(Goal goal) {
        Session session = sessionFactory.getCurrentSession();
        session.saveOrUpdate(goal);
        return goal;
    }

    public void delete(int id) {
        Session session = sessionFactory.getCurrentSession();
        Goal goal = get(id);
        if (goal != null) {
            session.delete(goal);
        }
    }
}
